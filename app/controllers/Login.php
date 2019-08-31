<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Base_Controller
{
    public function index()
    {
        $view['view'] = 'i_login';
        $this->load->view('base_layout', $view);
    }
}
