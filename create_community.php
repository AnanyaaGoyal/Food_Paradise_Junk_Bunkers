<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>input[type=text], input[type=email], input[type=password], textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;
  }
  
  input:focus {
  background-color: aliceblue;}
  
  textarea:focus{
      border: 2px solid aliceblue;
      background-color: aliceblue;}
  </style>
</head>
<body style="background-image:url('pexels-adonyi-gábor-1414651.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <h1 style="margin-left: 150mm; margin-top:20mm;"> CREATE A COMMUNITY</h1>
<div class="container" style="  padding:10px; background-color:cadetblue; max-width: 40%; align-self: center;">
        <form action="create_community.php" method="post" autocomplete="on">
            <fieldset>
                <legend> Community:</legend>
            
            <div class="form-group">
                <label for="community_name"> Community_Name:</label>
                <input type="text" class="form-control" id="community_name" name="community_name" placeholder="enter community name here">
                </div>
                <div class="form-group">
              <label for="star_ingredient">Star Ingredient:</label>
              <input type="text" class="form-control" id="star_ingredient"  name="star_ingredient" placeholder="star_ingredient">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password" placeholder="password">
            </div>
            
            <div class="form-group">
               
                <label for="description"> Description:</label>
                <center> 
                <textarea name="description" rows="10" cols="30"> 
                </textarea>
                </center>
        </div>
        <center> <button type="reset" class="btn btn-primary"> Reset </button>          
          <button type="submit" name="create-com" class="btn btn-primary">Submit</button></center>
        </fieldset>
          </form>
        </div>
        <?php
        
        include('connection.php');
        if(isset($_POST['create-com'])){
        $community_name= $_POST['community_name'];
        $star_ingredient= $_POST['star_ingredient'];
        $username= $_POST['username'];
        $password= $_POST['password'];
        $description= $_POST['description'];
        $sql="select username, password from user_info";
  $query1 = mysqli_query($c,$sql) or die ("error ".mysqli_error($c));
  while($data= mysqli_fetch_array($query1))
  {
    $susername = $data['username'];
    $spassword = $data['password'];
    if($susername==$username && $spassword== $password){
      
      $query= mysqli_query($c, "insert into communities(community_name, star_ingredient, creator, description) values ('{$community_name}', '{$star_ingredient}', '{$username}','{$description}')") or die ("error in query".mysqli_error($c));
      $query2= mysqli_query($c, "create table $community_name(post_id int primary key auto_increment, recipe_name varchar(256), recipe varchar(2000), image varchar(256), chef varchar(256))") or die ("error in query".mysqli_error($c));
      if($query){
        echo "<script> alert('community created successfully'); window.location='homepage.php'</script>";
        
      }
    }
    else{
      echo "<script> alert('incorrect password or username'); window.location='create_community.php' </script>";
    }
  }
      }
        ?>

    </body>
</html>