<?php
$mysqli = new mysqli("localhost", "root", "", "users");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>