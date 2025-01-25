<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python</title>
        <link rel="icon" href="images/fevicon.png">
        <link rel="stylesheet" href="css/ulogin.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="../../index.php"><img src="images/ETHICALDOOD 2.0.png"></a>
                <div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Forum/forum.php">Forum</a></li>
        <li><a href="compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="files/users.php">User []</a></li>
                    <br>
                    <li><a href="files/UF.php">Admin</a></li>
            </div>
        </li>
        <li><a href="question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="ulogin.php">User</a></li>
                    <br>
                    <li><a href="Admin 2/Admin login.php">Admin</a></li>
            </div>
        </li>
        <li><a href="feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="sections/html/html.php">HTML</a></li>
            <li><a href="sections/php/php.php">PHP</a></li>
            <li><a href="sections/python/python.php">Python</a></li>
            <li><a href="sections/java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="about us/about.php">About Us</a></li>
    </ul>
        </div>
            </nav>
        </section>
        <div class="help-center" id="help">
            <h1>Form Instructions</h1>
            <h5>1. When uploading your code files please use your USER ID, without user id you cannot upload your files. ETHICALDOOD has provided your USER ID while signing-up.</h5>
            <h5>2. Be sure when uploading file your filename and the input pathname should be same with extension of your file. and importantly dont try to erase the pathname(user_files/).
                i.e user_files/your_filename.extension</h5>
            <h5>3. Please be patient after uploading your content. Your file will be displayed on the Ethicaldood after Admins approval. You'll be notified by an email when your code get validated.</h5>
            <div class="close-btn"><button onclick="exit()">Close</button></div>
        </div>

        </div>
        <div class="container" id="form">
            <div class="form" id="sign-in">
                <form method="POST" enctype="multipart/form-data">
                    <div class="center">
                    <span>Upload Files</span>
                    </div>
                    <div class="form-contents">
                    <label>User ID :</label>
                        <input type="text" name="userid">
                        <label>Name: </label>
                        <input type="text" name="name">
                        <label>User Img: </label>
                        <input type="file" name="user-img">
                        <label>Img Path: </label>
                        <input type="text" name="img-path" value="../user_files/img/">
                    <label id="lb2">File Name: </label>
                        <input type="text" name="fname">
                    <label>Select File: </label>
                    <br>
                        <input type="file" name="myfile" id="myfile">
                        <br>
                    <label>Path: </label>
                    <input type="text" name="path" value="../user_files/">
                    </div>
                        <div class="btn">
                        <input type="submit" value="Upload" name="upload">
                        <button id="logout-btn">Help</button></a>
                    </div>
                </form>
            </div>
        </div>
        <section class="footer">
        <h4> Follow Me On</h4>
        <div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/whatsapp.png"></a>
                        <a href="#"><img src="images/snapchat.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="images/instagram.png"></a>

                    </div>
                </div>

        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Made With &hearts; by GT</p>




        </div>
        </section>
        <script>
            document.getElementById("help").style.display = 'block';
            document.getElementById("form").style.display = 'none';
            function exit(){
                document.getElementById("help").style.display = 'none';
                document.getElementById("form").style.display = 'block';
            }
        </script>
    </body>
    </html>
<?php
if(isset($_POST['upload'])){
//error_reporting(0);
$path=$_POST['path'];
$fname=$_POST['fname'];
//$description=$_POST['description'];
$uid=md5($_POST['userid']);
$uname=$_POST['name'];
$imgpath=$_POST['img-path'];
//$start=$_POST['style'];
//$style1=$_POST['p'];
//$end=$_POST['div'];
//$end2=$_POST['div2'];
//$fname=$_POST['style'].$_POST['t1'].$_POST['h'];
$conn=mysqli_connect("localhost","root","","users");
if($conn){
$filename=$_FILES['myfile']['name'];
$destination='user_files/'.$filename;
$extension=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$file=$_FILES['myfile']['tmp_name'];
$imgname=$_FILES['user-img']['name'];
$destination2='user_files/img/'.$imgname;
$extension=strtolower(pathinfo($imgname,PATHINFO_EXTENSION));
$extension2=strtolower(pathinfo($file,PATHINFO_EXTENSION));
$extension3=!in_array($extension2,['zip','docx','pdf','mp4','mp3']);
$img=$_FILES['user-img']['tmp_name'];
if(isset($_POST['upload'])){
if(!in_array($extension,['png','jpg','jpeg']) && $extension3){
echo"<script>alert('Your file extension must be zip, pdf, png, mp4, mp3,jpg, jpeg or docx..!');</script>";
}
elseif($_FILES['myfile']['size']> 10000000 && $_FILES['user-img']['size']> 10000000){
echo"<script>alert('file is too large..!');</script>";
}
else{
if(move_uploaded_file($file,$destination) && move_uploaded_file($img, $destination2)){
$sql= "insert into user_files values('','$uid','$uname','$imgpath','$filename','$path')";
if(mysqli_query($conn,$sql)){
echo"<script>alert('File uploaded..!');</script>";
}else{
    echo mysqli_error($conn);
}
}
}
}}
}
?>