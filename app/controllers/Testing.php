<?php

/**
 * Class Testing
 * Used for running tests only.
 */
class Testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    function index()
    {
        $this->test_valid_pattern();
        $this->test_invalid_pattern();
    }

    private function test_valid_pattern()
    {
        $identifier = discover_program_identifier("CUHASBP3000301T15");

        echo $this->unit->run($identifier, 'is_string', 'It should return string: ' . '<b>' . $identifier . '</b>');
    }

    private function test_invalid_pattern()
    {
        $identifier = discover_program_identifier("CUHASJN3000301T15");

        echo $this->unit->run($identifier, 'is_null', 'It should return null');
    }
}