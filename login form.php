<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style> input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;
  }
  input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;}
    
    input:focus {
  background-color: aliceblue;
    }
  background-image{
    opacity: 0.5;
  }
  a{
    color:black;
    font-weight: bold;
  }

    </style>
</head>
<body style=" background-image:url('pexels-adonyi-gábor-1414651.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

<?php

 include('connection.php');
	
   

if(isset($_POST['user_login'])){
  $username= $_POST['username'];
  $password=$_POST['password'];
  $_SESSION["username"]=$_POST['username'];
  
   $sql = "SELECT * FROM user_info WHERE username = '{$username}' and password = '{$password}'";
$result = mysqli_query($c,$sql) or die("error in login".mysqli_error($c));
$row = mysqli_fetch_array($result);
//$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
 
  

  echo "<script>alert('Login Successfull');window.location='after-login.php'</script>";

}else {

echo "<script>alert('Your Login Name or Password is invalid');window.location='login form.php'</script>";

}
  
}
?>

<br><br><br><br><br><br><br>
    <h1 style="margin-left:19cm;">LOGIN</h1>
<div class="container" style="padding:10px; background-color:cadetblue; max-width: 40%; align-self: center;">
        <form action="login form.php" method="post" autocomplete="on">
            
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" id="pwd" placeholder="password">
            </div>
            
            <center> <button type="reset" class="btn btn-primary"> Reset </button>          
              <button type="submit" name="user_login" class="btn btn-primary">Submit</button></center>
          </form>
          <br>
          <center><a href="homepage.html">Go back to homepage </a></center>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
    </html>