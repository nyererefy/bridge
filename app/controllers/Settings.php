<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Settings extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        require_login();
        Requests::register_autoloader();
    }

    public function index()
    {
        $view['view'] = 'i_settings';
        $this->load->view('base_layout', $view);
    }

    /**
     * This allows student to reset their accounts directly from this bridge in case of forgotten password etc.
     * @return mixed
     */
    public function reset()
    {
        //We only need registration number here. So it doesn't matter if you are getting it though session or db.
        $data = array(
            'regNo' => $this->session->{TABLE_REG_NO_FIELD}, //TABLE_REG_NO_FIELD was stored during login.
        );

        // These can be obtained in Nyererefy's admin dashboard.
        $headers = array(
            'CLIENT_ID' => CLIENT_ID,
            'CLIENT_SECRET' => CLIENT_SECRET
        );

        $response = Requests::post(NYEREREFY_SERVER_URL . '/api/v1/reset', $headers, $data);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header($response->status_code)
            ->set_output(json_encode(array(
                "message" => json_decode($response->body)->message
            )));
    }
}
