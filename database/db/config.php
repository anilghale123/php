<?php

$username = 'root';
$password = '';
$hostname = "localhost";
$database_name = "user";

$conn = mysqli_connect($hostname, $username, $password, $database_name);
if (!$conn) {
  die(mysqli_connect_error());
}
