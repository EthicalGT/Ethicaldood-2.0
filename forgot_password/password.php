<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ethicaldood</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    <div class="card">
        <h1 class="card_title">Password Reset</h1>
        <form class="card_form" method="POST">
            <div class="input">
                <input type="password" class="input_field" required id="pwd" name="pwd"/>
                <label class="input_label">Password</label>
            </div>
            <input type="submit" name="submit">
          </form>
    </div>

</div>
</div>
<!-- partial -->
  
</body>
</html>
<?php
if(isset($_POST['submit'])){
$pwd=md5($_POST['pwd']);
$conn=mysqli_connect('localhost','root','','otp');
$sql1="update admin_login set password='$pwd' where username='7d453ec7058f0391a80b93eddc2a2832'";
$result=mysqli_query($conn,$sql1);
if(mysqli_query($conn,$sql1)){
    echo"<script>alert('Password Updated Successfully..!');
    window.location='../Admin login.php';
    </script>";
}
else{
  echo"<script>alert('Password Updation Failed..!');</script>";
}
}
?>