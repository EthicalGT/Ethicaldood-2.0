<?php
$conn=mysqli_connect("localhost","root","","projects");
$sql1=mysqli_query($conn,"select path from projects_developed where project='Project ShopG'");
$op1=mysqli_fetch_assoc($sql1);
$sql2=mysqli_query($conn,"select path from projects_developed where project='Project NewsHub'");
$op2=mysqli_fetch_assoc($sql2);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="icon" href="../images/fevicon.png">
        <link rel="stylesheet" href="../css/aboutme.css">
        <link rel="stylesheet" href="swiper-bundle.min.css">
    </head>
    <body>
        <section class="sub-header">
            <nav>
                <a href="../index.php"><img src="../images/ethicaldood2.png"></a>
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
        <li><a href="about.php">About Us</a></li>
    </ul>
                </div>
            </nav>
        </section>
        <div class="content">
            <div class="info">
                <h4>Hello, I am </h4>
            <h1>Ganesh Telore</h1>
            <h3>I'm a Student</h3>
        </div>
            <div class="info">
                <img src="../images/GT2.png">
            </div>
        </div>
        <section class="aboutme">
            <div class="main">
                <img src="../images/GT2.png">
                <div class="about-text">
                    <h2>About Me</h2>
                    <h5>A <span>Student</span></h5>
                    <p>I am a student and Admin of Ethicaldood 2.0. I study in BBACA and i have experienced of maing 3 projects. I am able to design any website using HTML CSS and Javascript. I am good enough in PHP, javascript, HTML, CSS, Python and Java.
                    I have completed MSCIT 
                    </p>
                    <a href=""><button>Talk to Me</button></a>
                </div>
        </section>
        <div class="sections">
            <h1>Projects Developed</h1>
            <div class="main-section">
                <div class="section-class">
                    <h3>Shop-G</h3>
                        <p>Shop-G is a PHP based project which is created by Me. It's a Grocery ordering system via which user can easily order Grocery products from homeplace.
                            There is no need to physically present on the mall instead of this user can order things online. This project especially developed for college project.</p>
                            <a href="<?php echo $op1['path']; ?>"><button>Go</button></a>
                        </div>
                        <div class="section-class">
                    <h3>NewsHub</h3>
                        <p>Shop-G is a PHP based project which is created by Me. It's a Grocery ordering system via which user can easily order Grocery products from homeplace.
                            There is no need to physically present on the mall instead of this user can order things online. This project especially developed for college project.</p>
                            <a href="<?php echo $op2['path']; ?>"><button>Go</button></a>
                        </div>
                        <div class="section-class">
                    <h3>ED 1.0</h3>
                        <p>Shop-G is a PHP based project which is created by Me. It's a Grocery ordering system via which user can easily order Grocery products from homeplace.
                            There is no need to physically present on the mall instead of this user can order things online. This project especially developed for college project.</p>
                            <a href=""><button>Go</button></a>
                        </div>
                    </div>
                </div>
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
        <p>Crafted With &hearts; by GT</p>

    <!---------javascript toggle menu-------- -->


                </div>



    <!--footer-->
    
    


    </body>
    </html>

    </body>
    </html>