<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1";
$dbname = "home";
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection error: " . $connect->connect_error);
}
?>