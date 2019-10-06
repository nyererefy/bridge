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

    function sendData()
    {
        $response = Requests::get('https://github.com/timeline.json');
        var_dump($response->body);
    }
}
