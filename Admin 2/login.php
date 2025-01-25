<html>
<form action="#" method="POST">
<label>Enter Username :</label><br>
<input type="text" name="tb1"><br>
<label>Password :</label><br>
<input type="password" name="password"/><br>
<input type="submit" name="submit" value="Login"/>
</form>
</html>
<?php 
if(isset($_POST['submit'])){
if($_POST['tb1']=="ganeshtelore" && $_POST['password']=="GT@2004."){
echo"<audio src='music/welcome.mp3' autoplay='autoplay'>";
//echo"<script>window.location='index.html'; </script>";
}
else{
echo"<script>alert('access denied'); </script>";
}
}
?>