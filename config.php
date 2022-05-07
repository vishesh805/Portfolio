<?php

session_start();

$host = "localhost"; /* Host name */
$user = "id18836837_portfolio"; /* User */
$password = "e20cse135_1yTF4q@1"; /* Password */
$dbname = "id18836837_users"; /* Database name */

$con = mysqli_connect($host,$user,$password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}