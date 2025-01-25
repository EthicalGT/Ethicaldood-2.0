<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood-Assignments</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="sub-header-php">
            <nav>
                <a href="../../index.php"><img src="../../images/ethicaldood2.png"></a>
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
            <h1>Advance PHP</h1>
        </section>
        <!------PHP content-------->
       <div class="legend">
             <h2>Advance PHP Contents</h2>
             </div>      
        
                <div class="section-div">
                  <div class="div1">
                   <h2>1. Object Oriented Programming in PHP</h2>
                   <p>Object Oriented Concepts, class, objects, constructor, destructor etc</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
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
        
                   <h2>2. To Study Web Techniques</h2>
                   <p>Sticky Forms, Multi-valued Parameters, Sticky-Multivalued Parameters etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
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
        
                   <h2>3. XML</h2>
                   <p>XML declaration, XML Tags, XML Elements, XML attributes, SimpleXML etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
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
                   <h2>4. PHP with AJAX</h2>
                   <p>XML Introduction, XMLHttpRequest Object, etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter4";
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
        
                   <h2>5. Connecting Database using PHP and AJAX</h2>
                   <p>database connection and predefined functions</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
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
                   
                   <h2>6. PHP Framework - Druple</h2>
                   <p>Creating contents- Creating Aricles, Creating Basic page, Modules etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt4";
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
                <p>Note: In case You're Full of Knowledge with PHP lets take an Test to test your Knowledge..!</p>
            </div>
<div class="test-btn">
<a href="../php/MCQ.php"><button>Test</button></a>
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