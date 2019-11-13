<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        require_login();
        Requests::register_autoloader();
    }

    function index()
    {
        $view['view'] = 'i_home';
        $this->load->view('base_layout', $view);
    }

    function send_data()
    {
        $result = $this->student_model->get_student_data();

        // Don't change array keys, We need them intact.
        // Make sure the all program Identifiers are registered in Nyererefy's admin dashboard.
        // If this doesn't apply with your system logic please create a new issue on Github.
        $data = array(
            'regNo' => $result->{TABLE_REG_NO_FIELD},
            'email' => $result->{TABLE_EMAIL_FIELD},
            'year' => $result->{TABLE_YEAR_FIELD},
            'programIdentifier' => $result->{TABLE_PROGRAM_IDENTIFIER_FIELD},
            // or 'programIdentifier' => discover_program_identifier($result->{TABLE_REG_NO_FIELD})
        );

        // These can be obtained in Nyererefy's admin dashboard.
        $headers = array(
            'CLIENT_ID' => CLIENT_ID,
            'CLIENT_SECRET' => CLIENT_SECRET
        );

        $response = Requests::post('http://localhost:2000/api/v1/register', $headers, $data);

        if ($response->success) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    "status" => "success",
                    "message" => "Your data has been sent successfully! You can now login to Nyererefy"
                )));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(401)
                ->set_output(json_encode(array(
                    "status" => "fail",
                    "message" => "Something went wrong, Please contact your Bridge administrator!"
                )));
        }
    }
}
