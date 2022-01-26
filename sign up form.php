<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>input[type=text], input[type=email], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;
  }
  
  input:focus {
  background-color: aliceblue;}
  </style>
</head>
<body style="background-image:url('pexels-adonyi-gábor-1414651.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">

<br><br><br> <h1 style="margin-left:670px;"> SIGN UP</h1>
<div class="container" style="padding:10px; background-color:cadetblue; max-width: 40%; align-self: center;">
        <form action="add_record.php" method="post" autocomplete="on">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="enter your name here">
                </div>
                <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email"  name="email-address" class="form-control" id="email" placeholder="email address">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" id="pwd" placeholder="password">
            </div>
            <p>Gender:</p>
            <div class="form-group">
            <input type="radio" id="gender" name="gender" value="Male">
            <label for="Male">Male</label><br>
            <input type="radio" id="gender" name="gender" value="Female">
            <label for="Female">Female</label><br>
            <input type="radio" id="gender" name="gender" value="Other">
            <label for="Other">Other</label>
  </div>
        <center> <button type="reset" class="btn btn-primary"> Reset </button>          
          <button type="submit" name="create-user" class="btn btn-primary">Submit</button></center>
          </form>
        </div>
        <br><br>
        
    </body>
</html>