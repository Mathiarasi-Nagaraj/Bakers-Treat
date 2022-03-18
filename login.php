

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="effects.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>login_popup</title>
<link rel="stylesheet" href="styles.css">
<style>
.ebook-email-sec { margin: 0px; padding: 0px; width: 100%; float: left; }
 .username, .password { width: 47%;border: none; margin-bottom: 30px; float: left; padding: 17px;border-radius: 6px; font-family: 'Montserrat', sans-serif;font-size: 13px;font-weight: 500; box-sizing: border-box; }
 .password {float: right;}
</style>
</head>

<body>
<section class="popup-graybox">
<div class="signup" >
 <img src="https://tse3.mm.bing.net/th?id=OIP.4HdHEQt3peBkppLHh0_1zQAAAA&pid=Api&P=0&w=300&h=300"   class="img-fluid" alt="">
  <h2 data-edit="text">Login to our Website!</h2>
  <h3 data-edit="text">Login to our online store and start shopping your favourite products withg huge discounts</h3>
  <div class="ebook-email-sec">
      <form method="POST">
    <input name ="username" type="text" class="username" data-edit="placeholder" placeholder="Enter User Name" required>
    <input name ="password" type="password"  class="password" data-edit="placeholder" placeholder="Enter Password" required>
    <button  name="subbutton" class="button" type="submit"> login now</button>
</form>
  </div>
  <h5>Not Registered? <span> <a href="signup.php" class="text-success">CLICK HERE</a></span> to Register</h5>
</div>    
</section>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = NULL; 
$dbname = "register";
$e = NULL;
$f = NULL;

$conn = new mysqli($servername, $username, $password,$dbname);
if(isset($_POST['subbutton']))
{
 
  $e=$_POST['username'];
  $f=$_POST['password'];
     $sql= "SELECT *from users WHERE username='$e' AND  password ='$f'";
     
     $sql_run = mysqli_query($conn, $sql);
     if(mysqli_num_rows($sql_run)>0)
      {
         
        echo '<script> window.location.replace("index.html")</script>';
      }
      else
      {
          echo  ' <div class="myAlert-bottom alert alert-light alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Alert!</strong> Invalid username or password.</div>';
      }
    }

  
?>
