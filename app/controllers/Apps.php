<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Apps extends Base_Controller
{
    public function index()
    {
        $view['view'] = 'i_apps';
        $this->load->view('base_layout', $view);
    }
}
