<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ethicaldood Admin</title>
    <link rel="stylesheet" href="approval-style.css">
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
         <img src="../images/ethicaldood2.png" id="logo">
      </div>
      <div class="nav-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="insert.php">Insert File</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="approval.php">Approval</a></li>
        <li><a href="approval.php">About</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <h1>--Users information will appear here--</h1>
    <div class="container" id="container">
      <?php 
      $conn=mysqli_connect("localhost","root","","users");
    $query=mysqli_query($conn,"select * from user_credentials");
    while($row=mysqli_fetch_array($query)){
     echo' <div class="cards3">
     <p>UserID :'.$row['uid'].'</p>
      <p>User Name: '.$row['uname'].'</p>
      <p>Email :'.$row['email'].'</p>
    </div>';
  }
  ?>
</div>
</body>
</html>