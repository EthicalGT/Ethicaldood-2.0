<?php
    if(isset($_POST['sbmt'])){
    $style1=$_POST['tb1'];
    $msg=$_POST['msg'];
    $style2=$_POST['tb2'];
    $time=time();
    $conn=mysqli_connect('localhost','root','','forum');
    $query1=mysqli_query($conn,"insert into admin_forum values('','$style1','$msg','$style2','$time')");
  }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../images/fevicon.png">
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
      <!-- More messages... -->
    </div>
    <div class="msg-reply">
      <form method="POST">
      <input type="text" name="tb1" value='<div class="msg-outgoing">
        <span class="username">GT:</span>
        <p>' hidden>
      <input type="text" placeholder="Type your message..!" name="msg">
      <input type="text" name="tb2" value='</p>
      </div>' hidden>
      <button name="sbmt">send</button>
    </form>
    </div>
  </div>
   <section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="../../images/facebook.png"></a>
                        <a href="#"><img src="../../images/whatsapp.png"></a>
                        <a href="#"><img src="../../images/snapchat.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../../images/instagram.png"></a>

                    </div>
                </div>

        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Made With &hearts; by GT</p>
    
</section>    
</body>
</html>
