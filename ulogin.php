<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python</title>
        <link rel="icon" href="images/fevicon.png">
        <link rel="stylesheet" href="css/ulogin.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="../../index.php"><img src="images/ETHICALDOOD 2.0.png"></a>
                <div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Forum/forum.php">Forum</a></li>
        <li><a href="compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="files/users.php">User</a></li>
                    <br>
                    <li><a href="files/UF.php">Admin</a></li>
            </div>
        </li>
        <li><a href="question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="ulogin.php">User</a></li>
                    <br>
                    <li><a href="Admin 2/Admin login.php">Admin</a></li>
            </div>
        </li>
        <li><a href="feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="sections/html/html.php">HTML</a></li>
            <li><a href="sections/php/php.php">PHP</a></li>
            <li><a href="sections/python/python.php">Python</a></li>
            <li><a href="sections/java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="about us/about.php">About Us</a></li>
    </ul>
        </div>
            </nav>
        </section>
        <div class="container">
            <div class="form" id="sign-in">
                <form method="POST">
                    <div class="center">
                    <span onclick="signIn()">Sign-in</span><b>&nbsp;|&#160;</b><span onclick="signUp()">Sign-up</span>
                    </div>
                    <div class="form-contents">
                    <label>Username</label>
                        <input type="text" name="username" required>
                    <label id="lb2">Password</label>
                        <input type="password" name="password" required>
                        <ul>
                            <a href="#"><li>Forgot Password</li></a>
                        </ul>
                    </div>
                        <div class="btn">
                        <input type="submit" value="Sign-In" name="sign-in">
                    </div>
                </form>
            </div>
            <div class="form2" id="sign-up">
                <form method="POST">
                    <div class="center">
                    <span onclick="signIn()">Sign-in |</span><span onclick="signUp()"> Sign-up</span>
                    </div>
                    <div class="form-contents">
                    <label>Username: </label>
                        <input type="text" name="uid" required>
                    <label>Name: </label>
                        <input type="text" name="uname" required>
                    <label id="lb2">Password :</label>
                        <input type="password" name="pwd" id="pwd1" required>
                    <label>Email: </label>
                        <input type="email" name="email" required>
                    </div>
                        <div class="btn">
                        <input type="submit" value="Sign-Up" name="sign-up">
                    </div>
                </form>
            </div>
        </div>
        <section class="footer">
        <h4> Follow Me On</h4>
        <div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/whatsapp.png"></a>
                        <a href="#"><img src="images/snapchat.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="images/instagram.png"></a>

                    </div>
                </div>

        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Made With &hearts; by GT</p>




        </div>
        </section>
        <script>
            function signIn(){
                document.getElementById("sign-in").style.display="block";
                document.getElementById("sign-up").style.display="none";
            }
            function signUp(){
                document.getElementById("sign-in").style.display="none";
                document.getElementById("sign-up").style.display="block";
            }
        </script>
    </body>
    </html>
    <?php
    error_reporting(0);
    if(isset($_POST['sign-up'])){
    $userid=md5($_POST['uid']);
    $name=$_POST['uname'];
    $password=md5($_POST['pwd']);
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $conn=mysqli_connect("localhost","root","","users");
    $sqli=mysqli_query($conn,"insert into user_credentials values('$userid','$name','$password','$email')");
    if($sqli){
        echo"<script>alert('Account Created, Go to Sign-UP..!'); </script>";
    }
}

    if(isset($_POST['sign-in'])){
        $uname=md5($_POST['username']);
        $pwd=md5($_POST['password']);
        $conn=mysqli_connect("localhost","root","","users");
    $query=mysqli_query($conn,"select * from user_credentials where uid='$uname' and password='$pwd'");
    $op=mysqli_fetch_array($query);
    if($uname==$op['uid'] && $pwd==$op['password']){
        echo"<script>window.location='uinsert.php';</script>";
    }
    else{
        echo"<script>alert('Incorrect username or password..!'); </script>";
    }
}
?>
<?php
$email=$_POST['email'];

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
    $mail->setFrom('aherpriya269@gmail.com', 'ETHICALDOOD : A new Step Towards Coding');
    $mail->addAddress($email, 'User');     //Add a recipient
    

    //Attachments
    //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $msg="Congratulations, Your Accounted has been Created.! Your USER ID is: ".$userid;
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Account Creation';
    $mail->Body= $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo "<script>alert('UserID has been sent..!');</script>";
} catch (Exception $e) {
    echo "<script>alert('Technical error occured. Mailer Error: {$mail->ErrorInfo}');
    </script>";
}

?>