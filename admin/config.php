<?php
session_start();
$host = "localhost"; /* Host name */
$user = "aladin"; /* User */
$password = "1234"; /* Password */
$dbname = "cinema_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>