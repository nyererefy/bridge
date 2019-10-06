<?php

class Student_Model extends BASE_Model
{
    private $error, $response = array(), $data;

    function login($login, $password)
    {
        if (TABLE_LOGIN_FIELD_TWO != '') {
            $query = $this->db
                ->where(array(TABLE_LOGIN_FIELD_ONE => $login))
                ->or_where(array(TABLE_LOGIN_FIELD_TWO => $login))
                ->get(STUDENT_TABLE_NAME);
        } else {
            $query = $this->db
                ->where(array(TABLE_LOGIN_FIELD_ONE => $login))
                ->get(STUDENT_TABLE_NAME);
        }

        if ($query->num_rows() == 1) {
            $db_password = $query->row(TABLE_PASSWORD_FIELD);

            //If password was hashed.
            if (IS_PASSWORD_HASHED) {
                if (password_verify($password, $db_password)) {
                    $this->data = $query->row();
                } else $this->error = "Wrong credentials";
            } else {
                if ($password == $db_password) {
                    $this->data = $query->row();
                } else $this->error = "Wrong credentials";
            }

        } else $this->error = "User not found";

        $this->response = array(
            'error' => $this->error,
            'data' => $this->data
        );

        return $this->response;
    }

    /**
     * All logic for getting required data are done here.
     * Nyererefy's servers need these [reg_no,email,program,year]
     * If this doesn't apply with your system logic please create a new issue on Github.
     * @return mixed
     */
    function get_student_data()
    {
        return $this->db
            ->where(array(TABLE_PRIMARY_KEY => get_student_id()))
            ->get(STUDENT_TABLE_NAME)
            ->row();
    }

    function insertTestUser()
    {
        $data = array(
            TABLE_LOGIN_FIELD_ONE => TEST_LOGIN,
            TABLE_PASSWORD_FIELD => password_hash(TEST_PASSWORD, PASSWORD_BCRYPT),
            //If there other fields add them here....
            'name' => 'Test account',
            'reg_no' => 'BBD34553',
            //username => 'Sele'
        );

        return $this->db->insert(STUDENT_TABLE_NAME, $data);
    }

}