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

function clean_string($str)
{
    return preg_replace('/[^A-Za-z0-9]/', '', $str);
}

/**
 * Class Identifier
 * Helper class for below method.
 */
class Identifier
{
    /**
     * common pattern that is found in reg_no.
     * eg in CUHASBP3000301T15 and CUHASBP3000451T14 -> CUHASBP is common pattern.
     * This should contain maximum characters as many as possible for easy efficiency.
     */
    public $pattern;

    /**
     * after the above pattern what should be the output.
     * So from above numbers we may opt to output just "BP" or anything that can be remembered and registered in
     * nyererefy dashboard.
     */
    public $output;
}

/**
 * If program identifiers are not stored in database and registration numbers consists of common patterns then this
 * may be used.
 * It mainly reads common patterns that are in reg_no and returns identifier.
 * The identifiers returned here must be registered in nyererefy admin dashboard.
 * @param $reg_no
 * @return mixed
 */
function discover_program_identifier($reg_no)
{
    $output = null;

    //Todo all programs should be here with their respective identifiers matching the ones registered on Nyererefy.
    $bpharm = new Identifier();
    $bpharm->pattern = "CUHASBP";
    $bpharm->output = "bp";

    $md = new Identifier();
    $md->pattern = "CUHASMD";
    $md->output = "md";

    //all above should be registered in this array.
    $identifiers = array($bpharm, $md);

    foreach ($identifiers as $identifier) {
        //Cleaning data for easy matching..
        $pattern = clean_string($identifier->pattern);
        $reg_no = clean_string($reg_no);

        if (preg_match("/{$pattern}/i", $reg_no)) {
            $output = $identifier->output;
        }

        //no need to continue
        break;
    }

    return $output;
}