<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $view['view'] = 'i_login';
        $this->load->view('base_layout', $view);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    function submit()
    {
        $this->form_validation->set_rules('login', LOGIN_HINT, 'trim|max_length[100]|min_length[6]|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|max_length[100]|min_length[6]|required');

        if ($this->form_validation->run() == FALSE) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(401)
                ->set_output(json_encode(array(
                    "status" => "fail",
                    "message" => validation_errors()
                )));
        } else {
            $login = $this->input->post('login');
            $password = $this->input->post('password');

            $response = $this->student_model->login($login, $password);
            $data = $response['data'];

            if ($data) {
                /*
                 * Only 3 things need to be stored in session {id,email and reg_no} so change these fields in order to
                 * get those fields.
                 */
                $session_data = array(
                    TABLE_PRIMARY_KEY => $data->{TABLE_PRIMARY_KEY}, //This should be id
                    TABLE_LOGIN_FIELD_ONE => $data->{TABLE_LOGIN_FIELD_ONE}, //This should be email
                    TABLE_REG_NO_FIELD => $data->{TABLE_REG_NO_FIELD}, //This should be reg no. This is must...
                    'is_login' => true
                );
                $this->session->set_userdata($session_data);

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                        "status" => "success",
                        "message" => ""
                    )));
            } else {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(401)
                    ->set_output(json_encode(array(
                        "status" => "fail",
                        "message" => 'Something went wrong, Please contact your Bridge administrator'
                    )));
            }
        }
    }

    function test()
    {
        $this->load->library('unit_test');

        $response = $this->student_model->login(TEST_LOGIN, TEST_PASSWORD);
        $data = $response['data'];

        echo $this->unit->run($response, 'is_array', 'It should return response');
        echo $this->unit->run($data, 'is_object', 'It should return student data');
        echo $this->unit->run($data->{TABLE_LOGIN_FIELD_ONE}, TEST_LOGIN, 'It should return ' . TABLE_LOGIN_FIELD_ONE);
    }

}
