<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="header">
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
            <h1>Python</h1>
            <div class="lang-info">
            <p>Python is a versatile and powerful programming language that is widely used in various applications. Its simplicity and readability make it a popular choice for beginners, while its extensive library ecosystem and robust frameworks make it suitable for complex projects. In web development, Python is used with frameworks like Django and Flask to build dynamic and scalable websites and web applications. It also has libraries like BeautifulSoup for web scraping and requests for making HTTP requests.</p> 
            
        </div>  
        </section>
        <!------PHP content-------->
       <div class="legend">
             <h2>Python Contents</h2>
             </div>      
        
                <div class="section-div">
                  <div class="div1">
                   <h2>1. Introduction to Basic Python</h2>
                   <p>Python Data Types, Strings, List, Tuples, Dictionary, Loops etc</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
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
        
                   <h2>2. Working with Strings and Lists</h2>
                   <p>Types of String, Built-in Methods for String, Python List Functions etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
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
        
                   <h2>3. Working with Tuples, Sets and Dictionaries</h2>
                   <p>Python Tuple Functions, Sets, Set Methods, Dictionaries, Dictionary Functions etc.</p>
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
</html>
<html> 
 
                   <h2>4. Working with Functions, Modules And Packages</h2>
                   <p>Function Creating ,Calling, Python Modules, Datetime and Calender Module etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
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
</div>
</html>
<html>
<div class="div2">
        
                   <h2>5. Python Classes and Objects</h2>
                   <p>OOP'S, Instance, Data Abstraction, Constructor, Operator & Method Overloading etc.</p>
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
                   
                   <h2>6. Inheritance</h2>
                   <p>Types: Single, Multilevel, Multiple, Heirarchical, Hybrid, IS-A & HAS-A Relationship  etc.</p>
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
                   
                   <h2>7. Exception Handling</h2>
                   <p>Exception Handling, Try-Finally Cause, Raising Exceptions, Assert Statement etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter7";
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
                   
                   <h2>8. Python GUI Programming with Tkinter</h2>
                   <p>Python TKinter, Tkinter Widgets etc.</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="python";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from chapter8";
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
                <p>Note: In case You're Full of Knowledge with Python lets take an Test to test your Knowledge..!</p>
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
        <p><b>Version 2.0<b></p>
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