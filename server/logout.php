<?php
session_start();
$_SESSION = array();
session_destroy();
if (isset($_COOKIE[session_name("email")])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
header("Location: ../client/index.php");
session_write_close();
exit();
?>