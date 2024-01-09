<?php

$username = 'root';
$password = 'root';
$hostname = "localhost";
$database_name = "quote";

$conn = mysqli_connect($hostname, $username, $password, $database_name);
if (!$conn) {
  die(mysqli_connect_error());
}
