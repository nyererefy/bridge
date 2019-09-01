<?php

class Settings extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $view['view'] = 'i_settings';
        $this->load->view('base_layout', $view);
    }
}