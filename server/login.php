<?php
include 'conn.php';

$email = $mysqli->real_escape_string($_POST['email']);
$password = $_POST['password'];

$query = "SELECT password FROM dataofuser WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    if (password_verify($password, $hashed_password)) {
        session_start();
        $_SESSION['authenticated'] = true;
        if ($email == "special@gmail.com") {
            $_SESSION['admin'] = $email;
            header("Location: ../client/datadisp.php");
            exit();
        } else{
            $_SESSION['email'] = $email;
        }
        header("Location: ../client/index.php");
        exit();
    } else {
        echo "WRONG USERNAME OF PASSWORD!!";
        echo "<a href=" . "../client/login.php>" . "<button>Login</button></a>";
    }
} else {
    echo "User doesn't exists try again!! ";
    echo "<a href=" . "../client/login.php>" . "<button>Login</button></a>";
}

$mysqli->close();
?>