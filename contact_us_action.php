<?php
include 'dbcon.php';
require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/SMTP.php';
require 'PHPmailer/src/PHPMailer.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

session_start();

// $Sr_No = $_POST["Sr_No"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$Email = $_POST["Email"];
$mono = $_POST["mono"];
$Subject = $_POST["subject"];
$Your_Message = $_POST["Your_Message"];
$cource = $_POST["cource"];
$servises = $_POST["servises"];
// SQL query to insert data into the 'contact_us' table
$sql = "INSERT INTO `contact_us`( `First_Name`, `Last_Name`, `Email`, `Subject`, `Your_Message`, `mono`,`cource`,`servises`) VALUES  ('$First_Name','$Last_Name','$Email','$Subject','$Your_Message','$mono','$cource','$servises')";

$conn->query($sql);

// Email sending using PHPMailer
try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nikhilsurkar@natedu.co.in';
    $mail->Password = 'Code@8899'; // Your Gmail password or App Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('nikhilsurkar@natedu.co.in'); // Corrected email address
    $mail->addAddress('prathmeshsurkar55@gmail.com'); // Admin email address

    $mail->isHTML(true);
    $mail->Subject = "New Form Submission";
    $mail->Body = "Name: $First_Name $Last_Name<br>Email: $Email<br>Mo. No.:$mono<br>Subject: $Subject<br>Message: $Your_Message";

    // Handle file upload
    if (!empty($_FILES['attachment']['name'])) {
        $attachment = $_FILES["attachment"]["tmp_name"];
        $attachment_name = $_FILES["attachment"]["name"];
        $mail->addAttachment($attachment, $attachment_name);
    }

    $mail->send();
    echo "<script>
    alert('Thank you for your submission!  Swadarm Yog Team Connecting with you as soon as...');
    document.location.href = 'index.php';
  </script>";
    echo "Thank you for your submission!";
} catch (Exception $e) {
    echo "Sorry, something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
}

//header("Location: index.php");
?>
