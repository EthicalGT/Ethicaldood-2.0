<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ETHICALDOOD 2.0</title>
        <link rel="icon" href="../images/fevicon.png">
        <link rel="stylesheet" href="../css/feedback-style.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="../images/ETHICALDOOD 2.0.png"></a>
                <div id="nav">
<ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../Forum/forum.php">Forum</a></li>
        <li><a href="../compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="../files/users.php">User</a></li>
                    <br>
                    <li><a href="../files/UF.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="../ulogin.php">User</a></li>
                    <br>
                    <li><a href="../Admin 2/Admin login.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="../sections/html/html.php">HTML</a></li>
            <li><a href="../sections/php/php.php">PHP</a></li>
            <li><a href="../sections/python/python.php">Python</a></li>
            <li><a href="../sections/java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="../about us/about.php">About Us</a></li>
    </ul>
    </div>
            </nav>
           <form action="#" method="POST">
            <h1>Feedback</h1>
<!-- partial:index.partial.html -->
<div class="form-container">
  <div class="labels"><label>Name: </label></div>
      <input type="text" name="tb1"  required>
      
     <div class="labels"> <label>Contact No: </label></div>
      <input type="text" name="tb2"  required>

      <div class="labels"><label>Message/ Suggestions :</label></div>
      <textarea autofocus name="tb"  required></textarea>
    </div>

<div id="buttons">
<input type="submit" name="submit">
    </div>
</form>  

        </section>

<section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="../images/facebook.png"></a>
                        <a href="#"><img src="../images/whatsapp.png"></a>
                        <a href="#"><img src="../images/snapchat.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../images/instagram.png"></a>

                    </div>
                </div>

        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Made With &hearts; by GT</p>
    
</section>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['tb1'];
$contact=$_POST['tb2'];
$suggest=$_POST['tb'];
$username="root";
$servername="localhost";
$password="";
$database="feedback";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="insert into feedback_info values('$name','$contact','$suggest')";
$result2=mysqli_query($conn,$sql);
	if($result2){
		echo"<script>alert('Feedback Submitted..!');</script>";
	}
	else{
		echo"<script>alert('Unable to Send Feedback at this moment..!'); </script>";
	}
}
  ?>
