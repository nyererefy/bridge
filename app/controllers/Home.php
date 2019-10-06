<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        require_login();
    }

    public function index()
    {
        $view['view'] = 'i_home';
        $this->load->view('base_layout', $view);
    }
}
