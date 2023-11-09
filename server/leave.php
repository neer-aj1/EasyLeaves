<?php
include "conn.php";
session_start(); 
$fname = $mysqli->real_escape_string($_POST['fname']);
$lname = $mysqli->real_escape_string($_POST['lname']);
$reason = $mysqli->real_escape_string($_POST['reason']);
$rollnumber = $mysqli->real_escape_string($_POST['rollnumber']);
$fromDate = date('Y-m-d', strtotime($_POST['fromdate']));
$toDate = date('Y-m-d', strtotime($_POST['todate']));
$email = $_SESSION['email'];

$query = "INSERT INTO activeleaveapplications (fname, lname, reason, rollnumber, email, fromDate, toDate) VALUES ('$fname', '$lname', '$reason', '$rollnumber','$email', '$fromDate', '$toDate')";
if ($mysqli->query($query) === TRUE) {
    header("Location: ../client/index.php");

    exit();
} else {
    echo "Error occured during submission of leave form!!";
}

?>