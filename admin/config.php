<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'subrata6630' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'subrata6630');
define('DB_PASSWORD', '');
define('DB_NAME', 'school-database');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>