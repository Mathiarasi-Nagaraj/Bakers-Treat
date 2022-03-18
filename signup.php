<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="effects.js"></script>
<link rel="stylesheet" href="styles.css">
<title>Athentication</title>




 




</head>

<body>
<section class="popup-graybox">
<div class="signup" >
 <img src="login02_popup.png" alt="">
  <h2 data-edit="text">Signup into New Account</h2>
 
  <div class="ebook-email-sec" align="center";>
    <form method="POST">
    <label><b> Name:    </b></label>
    <input type="text" name="username" class="username" data-edit="placeholder" placeholder=" User Name" required><br>

    <label><b> Email:</b></label>
    <input type="email" name="email" class="Email" data-edit="placeholder" placeholder="Email" required><br>

    <label><b> Password:</b></label>
    <input type="password" name="password" class="password" data-edit="placeholder" placeholder="Enter Password" required><br>

    <label><b> Confirm Password:</b></label>
    <input type="password" name="cpassword" class="conpassword" data-edit="placeholder" placeholder="Enter confirm Password" required><br>

    <button name="subbutton" class="button" type="submit"> Sign up</button>
    </form>
  </div>
  <h5>Already have an account? <span> <a href="login.php" class="text-success">CLICK HERE</a></span> to login</h5>
</div>    
</section>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = NULL; 
$dbname = "register";
$a = NULL;
$b = NULL;
$c = NULL;

$conn = new mysqli($servername, $username, $password,$dbname);
if(isset($_POST['subbutton']))
{
 
  $a=$_POST['username'];
  $b=$_POST['email'];
  $c=$_POST['password'];
  $d=$_POST['cpassword'];
  if($c==$d)
  {
     $sql= "SELECT *from users WHERE email='$b'";
     $sql_run = mysqli_query($conn, $sql);
     if(mysqli_num_rows($sql_run)>0)
      {
      echo  '<div class=" myAlert-bottom alert alert-light alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Alert!</strong> Email already exists..</div>';
      }
    else
    {
      $sql = "INSERT INTO users VALUES ('$a','$b','$c','$d')";
      if (mysqli_query($conn, $sql)) 
      {
       echo '<div class=" myAlert-bottom alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Success!</strong>New Account created.</div>';
       echo '<script> window.location.replace("login.php")</script>';
      }
      
    }
  }
    else
    {
      echo  '<div class=" myAlert-bottom alert alert-light alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Alert!</strong> Password and confirm password not matched.</div>';
    }
  

} 




?>