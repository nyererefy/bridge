<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        Requests::register_autoloader();
    }

    function index()
    {
        $response = Requests::get('https://github.com/timeline.json');
        var_dump($response->body);
    }

    function sendData()
    {
        $response = Requests::get('https://github.com/timeline.json');
        var_dump($response->body);
    }
}
