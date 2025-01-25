<html>
<form method="POST">
    <input type="text" name="tb1">
    <input type="submit" name="sbmt">
</form>
<?php
$uid=$_POST['tb1'];
$conn=mysqli_connect("localhost","root","","test");
$query=mysqli_query($conn,"select * from user_credentials,user_files where user_credentials.user_id='$uid' and user_files.user_id='$uid'");
            while($row=mysqli_fetch_array($query)){ 
                $img=$row['img'];
                $uname=$row['user_name'];
               $path=$row['path'];
               echo"<img src='".$img."' height='80px' width='130px'>";
               echo $uname;
               echo "<a href='".$path."'><button>View</button>";
           }
       ?>