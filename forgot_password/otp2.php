<?php
$email=$_POST['email'];
$conn=mysqli_connect('localhost','root','','otp');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aherpriya269@gmail.com';                     //SMTP username
    $mail->Password   = 'sezewmarngjujfyo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aherpriya269@gmail.com', 'Mailer');
    $mail->addAddress($email, 'User');     //Add a recipient
    

    //Attachments
    //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $otp=rand(100000,999999);
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'OTP Validation';
    $mail->Body= "Your One Time Password For Resetting password is :".$otp;
    $time=time();
    $sql="insert into otp_validation values('$otp','$time')";
    mysqli_query($conn,$sql);
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>alert('OTP has been sent..!');window.location='otp_verify.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
    window.location='otp.php'</script>";
}
mysqli_close($conn);
?>