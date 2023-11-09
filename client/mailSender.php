<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../PHPMailer/Exception.php";
require "../PHPMailer/PHPMailer.php";
require "../PHPMailer/SMTP.php";

include '../server/conn.php';
$id = $_POST["idOfLeave"];
if (isset($_POST["sendAccMail"])) {
    $msg = '';
    $initialMsg = 'YOUR LEAVE HAS BEEN ACCEPTED';
}

if (isset($_POST["sendRejMail"])) {
    $msg = $_POST['msg'];
    $initialMsg = $_POST['initialMsg'];
}

$query = "SELECT * FROM activeleaveapplications WHERE id = $id";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$fromDate = $row["fromDate"];
$toDate = $row["toDate"];
$finalMsg = $initialMsg . '<br/>' . $msg . '<br/>' . '<p>Applied Leave FROM: ' . $fromDate . ' TO: ' . $toDate . '</p>';
$mail = new PHPMailer(true);
try {                    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '**EMAIL**';
    $mail->Password = '**PASSWORD**';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('**EMAIL**', 'Leave Form');
    $mail->addAddress($row['email']);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Regarding leave application';
    $mail->Body = "$finalMsg";
    $mail->send();
    $query = "DELETE FROM activeleaveapplications WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        echo "Error occurred during deleting the data: " . $stmt->error;
        exit();
    } else {
        header("Location: ../client/datadisp.php");
        exit();
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>