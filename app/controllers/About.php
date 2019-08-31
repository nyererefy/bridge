<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  About extends Base_Controller
{
    public function index()
    {
        $view['view'] = 'i_about';
        $this->load->view('base_layout', $view);
    }
}
