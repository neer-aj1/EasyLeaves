<?php
include '../server/conn.php';
if (isset($_POST["rejLeaveReq"])) {
    $initialMsg = "YOUR LEAVE HAS BEEN REJECTED!!<br/>";
    $id = $_POST['idOfLeave'];
    $query = "SELECT * from activeleaveapplications where id = $id";
    $result = $mysqli->query($query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $reason = $row["reason"];
        }
    } else {
        echo "No data found!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceptRejectLeave.css">
    <title>Leave Rejection Card</title>

    <style>

    </style>
</head>

<body>
    <div class="card">
        <h1>Leave Rejection</h1> <br>
        <div class="name">
            <div class="label">First Name:</div>
            <div class="value">
                <?php echo "$fname" ?>
            </div>
        </div>
        <div class="name">
            <div class="label">Last Name:</div>
            <div class="value">
                <?php echo "$lname" ?>
            </div>
        </div> <br>
        <div class="name">
            <div class="label">Reason: </div>
            <div class="value">
                <?php echo "$reason" ?>
            </div>
        </div>
        <br>
        <form action="mailSender.php" method="post">
            <div class="reason">
                <div class="label">Reason for Rejection:</div>
                <textarea class="rejection-text" name="msg" rows="4" cols="50"></textarea>
            </div>
            <input type="hidden" name="idOfLeave" value=" <?php echo $id ?> ">
            <input type="hidden" name="initialMsg" value="<?php echo $initialMsg ?> ">
            <div class="buttons">
                <button class="submit-button" name="sendRejMail" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <button
        style="background-color: rgb(226 232 240); color: rgb(15 23 42); padding: 1.25rem 20px;  border-radius: 10px; margin-top: 10px; margin-right: 50px;"><a
            style="color: black; text-decoration: none;" href='../client/datadisp.php'>Back</a></button>
</body>

</html>