<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-PHP</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="header-php">
            <nav>
                <a href="index.php"><img src="../../images/ethicaldood2.png"></a>
                <div id="nav">
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../Forum/forum.php">Forum</a></li>
        <li><a href="../../compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="../../files/users.php">User</a></li>
                    <br>
                    <li><a href="../../files/UF.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../../question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="../../ulogin.php">User</a></li>
                    <br>
                    <li><a href="../../Admin 2/Admin login.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../../feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="../html/html.php">HTML</a></li>
            <li><a href="../php/php.php">PHP</a></li>
            <li><a href="../python/python.php">Python</a></li>
            <li><a href="../java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="../../about us/about.php">About Us</a></li>
    </ul>
        </div>
            </nav>
            <h1>PHP</h1>
        </section>
        <!------PHP content-------->
<div class="legend">
             <h2>PHP Contents</h2>
             </div>      
        
                <div class="section-div">
                  <div class="div1">               
                      <h2>1. Basics in PHP</h2>
                   <p>PHP Delimeters, Data Types, Operators in PHP</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_1";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>
                   
                   <h2>2. Control Structures and Loops</h2>
                   <p>Conditional Statements and Loops</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_2";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>
                   
                   <h2>3. Arrays and Strings</h2>
                   <p>Strings, String Functions, Arrays, Array Sorting Functions</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_3";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>                   
                   <h2>4. Function, Class and Objects</h2>
                   <p>Types of functions, Class and Objects Creation</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_4";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	
</div>
</html>
<html>
<div class="div2">
                   
                   <h2>5. Working With Form and form Elements</h2>
                   <p>Form Tags, PHP Form Methods, PHP functions for Form processing, Sticky Forms etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_5";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>
                   
                   <h2>6. Session and Cookies</h2>
                   <p>What is Cookie ?, What is Session ?</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_6";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>
                   
                   <h2>7. Database</h2>
                   <p>Functions of MYSQL, Fetching Data from Database etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter_7";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">View Post</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>
                </div>
                <div class="border">
                <p>Note: In case You're Full of Knowledge with PHP lets take an Test to test your Knowledge..!</p>
            </div>
<div class="test-btn">
<a href="MCQ.php"><button>Test</button></a>
</div>



            




        
        


    <!--footer-->
<section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="../../images/facebook.png"></a>
                        <a href="#"><img src="../../images/Googlell.png"></a>
                        <a href="#"><img src="../../images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../../images/instagram.png"></a>

                    </div>
                </div>
        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Crafted With ♥ by GT</p>
    </section>


        </div>



    </section>

    <!---------javascript toggle menu-------- --
    <script>
        var navLinks = document.getElementById("navLinks");
        
        function showMenu(){
            navLinks.style.right = "0";
        }
        
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>-->

    </body>
    </html>