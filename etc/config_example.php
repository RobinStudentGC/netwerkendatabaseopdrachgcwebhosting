<?php
/* Database credentials. Assuming you are running MySQL server.
Please change this file to config.php and change these defines: */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'rmiljoen_db_php_oop');
define('DB_PASSWORD', 'kvEcK592MvbLHeLtZBTY');
define('DB_NAME', 'rmiljoen_database');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>