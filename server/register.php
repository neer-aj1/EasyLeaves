<?php
include 'conn.php';

$fname = $mysqli->real_escape_string($_POST['fname']);
$lname = $mysqli->real_escape_string($_POST['lname']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = "SELECT id FROM dataofuser WHERE email = '$email'";
$result = $mysqli->query($user);
if ($result && $result->num_rows > 0) {
    echo "User already exists!!";
    echo "<button><a href='../client/login.php'>Login</a></button>";
} else {
    $query = "INSERT INTO dataofuser (fname, lname, email, password) VALUES ('$fname','$lname' ,'$email', '$password')";
    if ($mysqli->query($query) === TRUE) {
        header("Location: ../client/login.php");
        exit();
    } else {
        echo "Error occured during registration";
    }
}

$mysqli->close();
?>