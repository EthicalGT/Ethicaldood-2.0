<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-HTML</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="header">
            
            <nav>
                <a href="index.php"><img src="../../images/ethicaldood2.png"></a>
                <div id="nav">
            <button id="toggle-btn" onclick="shownav()">Toggle</button>
            <button id="toggle-btn2" onclick="hidenav()">Toggle</button>
    <ul id="navmenu">
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

            <h1>HTML</h1>
            <div class="lang-info">
            <p>HTML, short for HyperText Markup Language, is the standard markup language used for creating web pages. It provides the structure and the content of a webpage, defining elements like headings, paragraph, links, images, and more. HTML uses tags to mark up different parts of the content, which are then rendered by web browsers. Its the foundation of every website and is often combined with CSS and Javascript to enhance the visual design and interactivity of web pages. HTML is essential for creating and displaying content on the World Wide Web.
            </p>
        </div>  
        </section>
        <!------HTML content-------->
          <div class="legend">
             <h2>HTML Contents</h2>
             </div>    
        
        
                <div class="section-div">
                  <div class="div1">               
                  
                   <h2>1. Basics HTML Tags</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_1";
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
                  
                   <h2>2. Creating Lists Through HTML</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_2";
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
                  
                   <h2>3. Creating Tables Through HTML</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_3";
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
                  
                   <h2>4. Creating Frames Through HTML</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_4";
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
                  
                   <h2>5. Creating Forms Through HTML</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_5";
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
                   
                   <h2>6. Image Mapping</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_6";
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
                   
                   <h2>7. Javascript</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_7";
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
                   
                   <h2>8. Various Frames Creation Through HTML</h2>
                   <p>_______________________________________</p>
<?php
$username="root";
$servername="localhost";
$password="";
$database="gt2";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from concept_7";
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


            </div>
            <div class="border">
                <p>Note: In case You're Full of Knowledge with HTML lets take an Test to test your Knowledge..!</p>
            </div>
<div class="test-btn">
<a href="MCQ.php"><button>Test</button></a>
</div>

       
        


    <!--footer-->
<section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="https://m.facebook.com"><img src="../../images/facebook.png"></a>
                        <a href="https://www.google.com/"><img src="../../images/Googlell.png"></a>
                        <a href="https://twitter.com"><img src="../../images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../../images/instagram.png"></a>

                    </div>
                </div>
        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        
        <p>Made With ♥ by GT</p>
    </section>


        </div>



    </section>

    <!---------javascript toggle menu-------- -->
    <script>
        
        function shownav(){
            document.getElementById('navmenu').style.display='block';
            document.getElementById('toggle-btn').style.display='none';
            document.getElementById('toggle-btn2').style.display='block';
        }
       function hidenav(){
        document.getElementById('navmenu').style.display='none';
        document.getElementById('toggle-btn').style.display='block';
        document.getElementById('toggle-btn2').style.display='none';
       }
    </script>

    </body>
    </html>