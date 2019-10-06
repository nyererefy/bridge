<?php

/**
 * Returns student's primary key
 * @return mixed
 */
function get_student_id()
{
    $CI = get_instance();
    return $CI->session->{TABLE_PRIMARY_KEY};
}

/**
 * For checking if student is login in
 * @return mixed
 */
function is_login()
{
    $CI = get_instance();
    return $CI->session->is_login;
}

/**
 * For protecting routes.
 */
function require_login()
{
    if (!is_login()) {
        redirect('login');
    }
}