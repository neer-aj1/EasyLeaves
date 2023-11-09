<?php
include '../server/conn.php';

$query = "SELECT * from activeleaveapplications";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $fname = $row["fname"];
    $lname = $row["lname"];
    $rollnumber = $row["rollnumber"];
    $reason = $row["reason"];

    echo '<div class="card">
    <div class="name">
        <div class="label">First Name:</div>';
    echo '<div class="value">' . $fname . '</div>
    </div>
    <div class="name">
        <div class="label">Last Name:</div>';
    echo '<div class="value">' . $lname . '</div>
    </div>
    <div class="reason">
        <div class="label">Reason for Leave:</div>';
    if (strlen($reason) > 20) {
      echo '<div class="value">' . substr($reason, 0, 20) . '...' . '</div>';
    } else {
      echo '<div class="value">' . $reason . '</div>';
    }
    echo '</div>
    <div class="mailBtns">
    <form class="buttons" method="post" action="./mailSender.php" >
    <input type="hidden" name="idOfLeave" value="' . $id . '">
        <button class="accept-button" name="sendAccMail">Accept</button>
    </form>
    <form class="buttons" method="post" action="./acceptRejectLeave.php" >
    <input type="hidden" name="idOfLeave" value="' . $id . '">
        <button class="reject-button" name="rejLeaveReq">Reject</button>
    </form>
    </div>  
  </div>';
  }
} else {
  echo "No data available";
}

$mysqli->close();
?>