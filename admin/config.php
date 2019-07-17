
<?php
// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'school-database';
$mysqli = new mysqli($server, $user, $pass, $db);
// show errors 
mysqli_report(MYSQLI_REPORT_ERROR);

?>