<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Faker
 * It just used to generate dummy data in db.
 * Be careful it is disabled by default.
 */
class  Faker extends Base_Controller
{
    public function index()
    {
        if (!ENABLE_FAKER) redirect(base_url());

        $this->load->library('unit_test');

        $result = $this->student_model->insertTestUser();
        echo $this->unit->run($result, 1, 'It should insert data');
    }

    public function password()
    {
        echo TEST_PASSWORD;
        echo '<br>';
        echo password_hash(TEST_PASSWORD, PASSWORD_BCRYPT);
    }
}
