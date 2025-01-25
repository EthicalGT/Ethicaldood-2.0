<html>
<form method="post">
<input type="text" name="tb1" value="<div class='new'>">
<input type="text" name="tb2" value="hello">
<input type="submit">
</form>
</html>
<?php
$new=$_POST['tb1'];
echo $new;
?>