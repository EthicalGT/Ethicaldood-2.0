<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="header-php">
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
            <h1 id="main-heading">PHP</h1>
            <div class="lang-info">
            <p>PHP is a popular server-side scripting language used for web development. It is known for its simplicity, flexibility, and wide range of applications. In web development, PHP is used to create dynamic web pages, handle form data, interact with databases, and perform server-side processing. It is often paired with HTML and CSS to build interactive and responsive websites. PHP has a vast ecosystem of frameworks like Laravel, Symfony, and CodeIgniter, which provide structure and additional functionality for building robust web applications. Content management systems like WordPress and Drupal are also built using PHP.</p>
        </div>  
        </section>
		<section class="key-features">
            <h2>PHP Topics</h2>
            <div class="row">
                <div class="new">
                    
                    <p>PHP Assignments covers all type of topics related to php language. It helps students to figure out the use of all concepts of php. This Assignments contains questions which help students to use php concepts via solving assignments.</p>
                    <a href="php 1.php" class="red-button">PHP</a>						
                </div>
                <div class="new">

                    <p>PHP subject university solved slips are provided by us for the students to help students. Slips are provided by savitribai phule pune university to enhance student knowledge of php subject. Slips are 30 which are likewise to assignments.</p> 
	<a href="../adv php/php 2.php" class="red-button">Advance PHP</a>
<html>
                </div>
                <div class="new">
                    
                    <p>PHP labbook consist of multiple topics and includes difficult to easy level of assignments for student by which they are able to understand and complete all their power of understanding via solving this assignments.</p>
                    <?php
$username="root";
$servername="localhost";
$password="";
$database="php";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from labbook";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">Labbook</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>					
                </div>
            </div>
        </section>
        
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