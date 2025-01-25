<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python</title>
        <link rel="stylesheet" href="mcq.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="../../index.php"><img src="../../images/ETHICALDOOD 2.0.png"></a>
                <div class="nav">
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
        </section>
<div class="alert" id="alert-msg">
    <h2>Hurray..!</h2>
    <p>You Got 
    <?php
    if(isset($_POST['sbmt'])){
    $Q1=$_POST['q1'];
    $Q2=$_POST['q2'];
    $Q3=$_POST['q3'];
    $Q4=$_POST['q4'];
    $Q5=$_POST['q5'];
    $Q6=$_POST['q6'];
    $Q7=$_POST['q7'];
    $Q8=$_POST['q8'];
    $Q9=$_POST['q9'];
    $Q10=$_POST['q10']; 
    $total=$Q1+$Q2+$Q3+$Q4+$Q5+$Q6+$Q7+$Q8+$Q9+$Q10;
    echo $total; } ?> Marks..!</p>
    <?php if($total==7){
        echo "<p>Your Progress is Moderate. <br>You Should Practice HTML Again..!</p>";
    }
    else if($total<=5 || $total==6){
        echo "<p>You got really bad Marks. You Should Practice HTML Again..!</p>";
    }
    else if($total==9 || $total==8){
        echo "<p>You're good enough but you can do it better. Practice HTML Again..!</p>";
    }
    else if($total==10){
        echo"<p>Congrats You have Learned all Python Concepts..!<br>You should head towards new Laguages, Check it Out on Ethicaldood...</p>";
    }
    ?>
    <a href="MCQ.php"><button>Back</button></a>
</div>
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
            We're from a poor family background. and wanna help students by providing source codes of web development programming languages
            such as PHP, HTML etc.
        </p>
        
        <p>Crafted With ♥ by GT</p>
    </section>
    <!---<script>
       var x=document.getElementById('showalert');
       var y=document.getElementById('main-box');
       var z=document.getElementById('alert-msg');
       function showalert(){
        y.style.display="none";
        z.style.display="block";
       }
       function goback(){
        z.style.display="none";
        y.style.display="block";
       }
    </script>--->
</body>
</html>