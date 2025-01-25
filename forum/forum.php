<?php
    if(isset($_POST['sbmt'])){
    $style1=$_POST['tb1'];
    $msg=$_POST['msg'];
    $style2=$_POST['tb2'];
    $time=time();
    $conn=mysqli_connect('localhost','root','','forum');
    $query1=mysqli_query($conn,"insert into user_forum values('','$style1','$msg','$style2','$time')");
  }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/fevicon.png">
  <link rel="stylesheet" href="styles.css">
  <title>ED-Forum</title>
</head>
<body>
  <div class="chat-container">
    <div class="chat-header">
      <h1 class="text">Welcome to the Ethicaldood Forum</h1>
    </div>
    <div class="messages">
      <!-- Actual chat messages go here -->
      <?php
$conn=mysqli_connect('localhost','root','','forum');
$query=mysqli_query($conn,'select * from user_forum');
while($op=mysqli_fetch_array($query)){
      echo $op['style-start'];
      echo $op['msg'];
      echo $op['style-end'];
    }
      ?>
<?php
$conn=mysqli_connect('localhost','root','','forum');
$query=mysqli_query($conn,'select * from admin_forum');
while($op=mysqli_fetch_array($query)){
      echo $op['style-start'];
      echo $op['msg'];
      echo $op['style-end'];
    }
      ?>    
    </div>
    <div class="msg-reply">
      <form method="POST">
      <input type="text" name="tb1" value='<div class="msg-incoming">
        <span class="username">User:</span>
        <p>' hidden>
      <input type="text" placeholder="Type your message..!" name="msg">
      <input type="text" name="tb2" value='</p>
      </div>' hidden>
      <button name="sbmt">send</button>
    </form>
    </div>
  </div>
</body>
</html>
