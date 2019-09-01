<?php
/**
 * Name of your institution
 * replace [Catholic University Of Health And Allied Sciences] with your own.
 */
define('INSTITUTION_NAME', 'Catholic University Of Health And Allied Sciences');

/**
 * Short form of INSTITUTION_NAME.
 * replace [CUHAS] with your own.
 * Smaller length the better.
 */
define('INSTITUTION_ABBREVIATION_NAME', 'CUHAS');

/**
 * This is represent your college/university.
 * (32 characters length you get on dashboard)
 */
define('API_ID', '');

/**
 * Database name were university/college/students data are stored.
 * (64 characters length you get on dashboard).
 * This should be kept private.
 */
define('API_SECRET', '');

/**
 * full URL where this app will be hosted.
 * eg https://amazing-university.org/nyererefy_bridge.
 */
define('BASE_URL', 'http://localhost/bridge');

/**
 * The hostname of your database server. Often this is ‘localhost’.
 */
define('DB_HOST', 'localhost');

/**
 * The username used to connect to the database.
 */
define('DB_USERNAME', 'root');

/**
 * The password used to connect to the database.
 */
define('DB_PASSWORD', '');

/**
 * Database driver.
 * Change it only if you are using different database. Default driver is for Mysql.
 * Possible values are : mysqli, postgre, odbc, etc. Must be specified in lower case.
 */
define('DB_DRIVER', 'mysqli');

/**
 * Database name were university/college/students data are stored.
 * replace [bridge_test_students_db] with your database name
 */
define('DB_NAME', 'bridge_test_students_db');

/**
 * N
 */
define('STUDENT_TABLE_NAME', 'students');


/**
 * Column/Field name which is holding student unique login, This should match exactly with
 * table field.
 * This is must.
 */
define('TABLE_LOGIN_FIELD_ONE', 'email');

/**
 * Some systems allow users to use email or phone or registration number as login
 * so if you have extra one too specify it here. default is empty and should be left empty if you don't have.
 * So this is optional.
 */
define('TABLE_LOGIN_FIELD_TWO', '');

/**
 * Column/Field name which is holding student password
 */
define('TABLE_PASSWORD_FIELD', 'password');

/**
 * Table primary key name
 */
define('TABLE_PRIMARY_KEY', 'id');

/**
 * If your system stores password as plain text (which is unlikely!) then make this false
 */
define('IS_PASSWORD_HASHED', true);

/**
 * This is shown on login form to indicate what student should enter.
 * Can be [Registration number] or [Email] or [Registration number/Email] depending on the table.
 * Don't type [Enter email or Type Email] instruction
 */
define('LOGIN_HINT', 'Email');


/**
 * If you would like to run login test change these values
 */
define('TEST_LOGIN', 'testtest@gmail.com');
define('TEST_PASSWORD', 'test1234');

/**
 * In case you don't have fake data and you want to insert some make this true
 * Browse faker in browser.
 * Be careful this may behave miserably.
 */
define('ENABLE_FAKER', false);



