<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="icon" href="../images/fevicon.png">
        <link rel="stylesheet" href="mk3.css">
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
        <li><a href="question papers/QS.php">Papers</a></li>
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
        <li><a href="about us/about.php">About Us</a></li>
    </ul>
                </div>

</nav>
<h1 id="heading">Question Papers</h1>
</section>

<section class="key-features">
            <p>We provide important Question papers related to Programming Languages, as a study material...</p>
            <div class="row">
                <?php 
                    $conn=mysqli_connect('localhost','root','','question_paper');
                    $query=mysqli_query($conn,'select path from bca1');
                    $row=mysqli_fetch_array($query);
                ?>
                <div class="new">
                    <a href="<?php
                    echo $row['path'];
                    ?>" target="_self"><img src="../images/BCA-I.png"></a>
                    <h3>BBACA-I</h3>
                    <p>These includes recently conducted question papers of BBACA-I. You can refer this question paper as a study material.</p>
                </div>
                <?php
                $query1=mysqli_query($conn,'select path from bca2');
                $row=mysqli_fetch_array($query1);
                ?>                
                <div class="new">
                    <a href="<?php echo $row['path']; ?>"><img src="../images/BCA-I.png"></a>
                    <h3>BBACA-II</h3>
                    <p>These includes recently conducted question papers of BBACA-II. You can refer this question paper as a study material.</p>
                </div>
                <div class="new">
                    <a href="" target="_self"><img src="../images/BCA-I.png"></a>
                    <h3>BBACA-III</h3>
                    <p>These includes recently conducted question papers of BBACA-III. You can refer this question paper as a study material.</p>
                </div>
            </div>
        </section>
        <section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="https://www.facebook.com/1000085688419302/posts/107585998774347/?mibextid=rS40aB7S9Ucbxw6v"><img src="../images/facebook.png"></a>
                        <a href="https://www.snapchat.com/add/ganeshtelore04?share_id=w2Txg71iWS4&locale=en-US"><img src="../images/snapchat.png"></a>
                        <a href="https://wa.me/+918010486885"><img src="../images/whatsapp.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../images/instagram.png"></a>

                    </div>
                </div>
        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Made With<span> ♥ </span>by GT</p>
    </section>
</body>
</html>