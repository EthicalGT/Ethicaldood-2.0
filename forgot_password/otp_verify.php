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
        <h1 class="card_title">ED-Password Reset</h1>
        <form class="card_form" method="POST">
            <div class="input">
                <input type="text" class="input_field" name="otp" required/>
                <label class="input_label">OTP</label>
            </div>
            <input type="submit" name="submit" value="verify"/>
          </form>
    </div>

</div>
</div>
<!-- partial -->
  
</body>
</html>
<?php

if(isset($_POST['submit'])){
$otp=$_POST['otp'];
$conn=mysqli_connect('localhost','root','','otp');
$sql1="select otp from otp_validation where otp='$otp'";
$result=mysqli_query($conn,$sql1);
$r=mysqli_fetch_assoc($result);
    if($r['otp']==$otp){
        echo"<script>alert('valid otp access granted');</script>";
        echo"<script>window.location='password.php';</script>";
    }
    else{
      echo'<script>alert("valid otp access granted");
      window.location.href="otp.php";
      </script>';
    }
    
}
?>