<?php
session_start(); 
if (isset($_SESSION['admin'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="datadisp.css"> -->
    <link rel="stylesheet" href="datadisp1.css">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: space-between">
        <h1>ACTIVE LEAVE REQUESTS</h1>
        <button style="background-color: rgb(226 232 240); color: rgb(15 23 42); padding: 1.25rem 20px;  border-radius: 10px; margin-top: 10px; margin-right: 50px"><a style="color: black; text-decoration: none;" href='../server/logout.php'>LOGOUT</a></button>
    </div>
    <div class="card1">
        <?php include './dataDisplay.php' ?>
    </div>
</body>

</html>

<?php 
}else{
  header("Location: login.php");
  exit();
}
?>