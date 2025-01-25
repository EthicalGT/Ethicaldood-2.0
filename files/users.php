<?php
$conn=mysqli_connect("localhost","root","","users");
$query=mysqli_query($conn,"select * from user_files");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="icon" href="../images/fevicon.png">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="swiper-bundle.min.css">
    </head>
    <body>

        <section class="sub-header-files">
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
                    <li><a href="users.php">User [<?php echo mysqli_num_rows($query); ?>]</a></li>
                    <br>
                    <li><a href="UF.php">Admin</a></li>
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
            <li><a href="../sections/core java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="../about us/about.php">About Us</a></li>
    </ul>
                </div>
            </nav>
            <h1>User Files</h1>
        </section>
        <p id="Note">---| All the users code files will be display here, Encourage users to do more for you too..! |---</p>
        <div class="user-container" id="show">
            <?php
                $conn=mysqli_connect("localhost","root","","users");
            $query=mysqli_query($conn,"select * from user_files");
            while($row=mysqli_fetch_array($query)){ 
                $img=$row['user_img'];
                $uname=$row['user_name'];
               $path=$row['fpath'];
            
     echo'   <div class="users">
        <div class="user-img"><img src="'.$img.'"></div> 
        <h2>'.$uname.'</h2>
        <p>You can check my latest Codes which i have uploaded, Which might help you..!</p>
        <div class="user-btn"><a href="'.$path.'"><button>View</button></a></div>   	
        </div>';
    }
    ?>
    </div>

<section class="footer">
        <h4> Follow Me On</h4>
		<div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="../images/facebook.png"></a>
                        <a href="#"><img src="../images/Googlell.png"></a>
                        <a href="#"><img src="../images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../images/instagram.png"></a>

                    </div>
                </div>
                <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
                <p><b>Version 2.0</b></p>
        <p>Crafted With ♥ by GT</p>

    <!---------javascript toggle menu-------- -->


                </div>



    <!--footer-->

</section>

</body>
</html>