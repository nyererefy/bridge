<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Settings extends Base_Controller
{
    public function index()
    {
        $view['view'] = 'i_settings';
        $this->load->view('base_layout', $view);
    }
}
