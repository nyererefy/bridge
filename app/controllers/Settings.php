<?php

class Settings extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        require_login();
    }

    public function index()
    {
        $view['view'] = 'i_settings';
        $this->load->view('base_layout', $view);
    }
}