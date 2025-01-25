<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ethicaldood Admin</title>
    <link rel="stylesheet" href="approval-style.css">
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
         <img src="../images/ethicaldood2.png" id="logo">
      </div>
      <div class="nav-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="insert.php">Insert File</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="approval.php">Approval</a></li>
        <li><a href="manage.php">Users</a></li>
        <li><a href="approval.php">About</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <div class="container" id="container">
    <?php
    $conn=mysqli_connect("localhost","root","","users");
    $query=mysqli_query($conn,"select * from user_files");
    while($row=mysqli_fetch_array($query)){
      $username=$row['user_name'];
      $path=$row['fpath'];
      $img=$row['user_img'];
    echo'<div class="cards">
    <img src="'.$img.'"> 
        <h2>User: '.$username.'</h2>
        <p>Id: '.$row['id'].'</p>
        <a href="'.$row['fpath'].'"><button>View</button></a>
        <button onclick="rejected()" id="reject">Rejected</button>    
        </div>';
    }
  ?>

  </div>
  <div class="action-frm" id="frm">
    <h2>Deletion Form</h2>
    <form method="POST">
      <br>
    <label>Enter ID: </label>
    <input type="text" name="id" maxlength="1" required>
    <label>Enter Email :</label>
    <input type="email" name="email" required><br>
    <label>Enter Message: </label>
    <input type="text" name="tb2" required>
    <button name="reject">Reject</button>
  </form>
</div>
<script>
  function rejected(){
    document.getElementById("container").style.display="none";
    document.getElementById("frm").style.display="block";
  }
</script>
</body>
</html>
<?php
if(isset($_POST['reject'])){
$id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","users");
$sql=mysqli_query($conn,"delete from user_files where id='$id'");
if($sql){
  echo"<script>alert('Command Executed..!'); </script>";
}
else{
  echo"<script>alert('Command Failed..!{mysqli_error($conn)}'); </script>";
}
}
?>
<?php
error_reporting(0);
$email=$_POST['email'];
$message=$_POST['tb2'];

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
    $mail->setFrom('aherpriya269@gmail.com', 'Ethicaldood Admin: Response Team');
    $mail->addAddress($email, 'User');     //Add a recipient
    

    //Attachments
    //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $msg="Your content is rejected by the Admin.<br> Reason: ".$message."<br>Sorry for the Regards..!<br>By Team of Ethicaldood";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'ED Content Management';
    $mail->Body= $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo "<script>alert('Mail Sent..!');</script>";
} catch (Exception $e) {
    echo "<script>alert('Technical error occured. Mailer Error: {$mail->ErrorInfo}');
    </script>";
}
?>
