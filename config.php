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
 * uuid v4 (32 characters length you get on dashboard)
 * This should be kept private.
 * Replace with your own uuid.
 */
define('CLIENT_ID', '5d94c158-569e-4530-adfd-b5e4a70bbb87');

/**
 * (64 characters length you get on dashboard).
 * This should be kept private.
 * Replace with your own secret.
 */
define('CLIENT_SECRET', 'd850ce512508a5150a4984c679bd0a0fa04333caf37f4036a8f9dfd41806c430');

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
 * replace [registrar] with your database name
 */
define('DB_NAME', 'registrar');

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
define('TABLE_LOGIN_FIELD_TWO', 'reg_no');

/**
 * Column/Field name which is holding student password
 */
define('TABLE_PASSWORD_FIELD', 'password');

/**
 * Table primary key name
 */
define('TABLE_PRIMARY_KEY', 'id');

/**
 * Name of Column/Field which is holding student reg_no. Replace [reg_no] with that.
 */
define('TABLE_REG_NO_FIELD', 'reg_no');

/**
 * Name of Column/Field which is holding student year. Replace [year] with that.
 */
define('TABLE_YEAR_FIELD', 'year');

/**
 * Name of Column/Field which is holding program identifier. Replace [programId] with that.
 */
define('TABLE_PROGRAM_IDENTIFIER_FIELD', 'programId');

/**
 * Name of Column/Field which is holding student email. Replace [email] with that.
 */
define('TABLE_EMAIL_FIELD', 'email');

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

/**
 * URL of Nyererefy's server
 */
define('NYEREREFY_SERVER_URL', 'http://localhost:2000');
//define('NYEREREFY_SERVER_URL', 'https://nyererefy.com');




