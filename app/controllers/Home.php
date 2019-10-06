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

    //todo remove settings. user will have to use nyererefy.
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
            'programIdentifier' => $result->{TABLE_PROGRAM_IDENTIFIER_FIELD}
        );

        // These can be obtained in Nyererefy's admin dashboard.
        $headers = array(
            'CLIENT_ID' => CLIENT_ID,
            'CLIENT_SECRET' => CLIENT_SECRET
        );

        $response = Requests::post('http://localhost:2000/api/v1/register', $headers, $data);

        var_dump($response->body);

        echo json_encode($response);
    }
}
