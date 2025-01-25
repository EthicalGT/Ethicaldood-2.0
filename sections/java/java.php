<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Java</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="header">
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
            <h1>Java</h1>
            <div class="lang-info">
            <p>Java is a versatile programming language used for developing a wide range of applications.
                It's known for its platform independance, meaning, Java programs can easily run on different operating systems. Java is commonly used for building desktop, web, and mobile applications. Its also used in server-side development, big data processing and Android app development. Java's strong object oriented programming features and vast liabraries make it a popular choice for developers worldwide.  
            </p>
        </div>  
        </section>
        <!------PHP content-------->
       <div class="legend">
             <h2>Java Contents</h2>
             </div>      
        
                <div class="section-div">
                  <div class="div1">
                   <h2>1. Introduction to Java</h2>
                   <p>Java Data Types, Array, String, Built-in Packages etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="java";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter1";
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
        
                   <h2>2. Classes Objects and Methods</h2>
                   <p>Class, Object, Constructor, Method Overloading, Object as Parameter etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="java";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter2";
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
                   <h2>5. Applet, AWT, Event and Swing Programming</h2>
                   <p>APPLET, AWT Heirarchy, Swing Class Heirarachy etc.</p>
        
                   
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter3";
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
                   <h2>3. Inheritance Pacage and Collection</h2>
                   <p>Types of Inheritance, Method Overriding, Super keyword, Abstract class, Interface etc.</p>
                   
                   
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter5";
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
                   
                   <h2>4. File and Exception Handling</h2>
                   <p>Exception Types, Exception Handling, File Handling etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter6";
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
                <p>Note: In case You're Full of Knowledge with Java lets take an Test to test your Knowledge..!</p>
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
        <p>Made With ♥ by GT</p>
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