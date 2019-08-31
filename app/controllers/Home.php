<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller
{
    public function index()
    {
        $view['view'] = 'i_home';
        $this->load->view('base_layout', $view);
    }
}
