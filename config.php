<?php
/**
 * Name of your institution
 * replace [Catholic University Of Health And Allied Sciences] with your own.
 */
define('INSTITUTION_NAME', 'Catholic University Of Health And Allied Sciences');

/**
 * Short form of INSTITUTION_NAME.
 * replace [CUHAS] with your own
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
 * Database name were university/college/students data are stored.
 * replace [bridge_test_students_db] with your database name
 */
define('DB_NAME', 'bridge_test_students_db');

/**
 * Database driver.
 * Change it only if you are using different database. Default driver is for Mysql.
 * Possible values are : mysqli, postgre, odbc, etc. Must be specified in lower case.
 */
define('DB_DRIVER', 'mysqli');

/**
 * If your system stores password as plain text (which is unlikely!) then make this false
 */
define('IS_PASSWORD_HASHED', true);

