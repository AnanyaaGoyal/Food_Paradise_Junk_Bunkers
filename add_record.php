<?php 
include('connection.php');

if(isset($_POST['create-user'])){
	
	$name=$_POST['name'];
	$email=$_POST['email-address'];
  $username= $_POST['username'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	
  //same username
  $sql="select* from user_info";
  $query1 = mysqli_query($c,$sql) or die ("error ".mysqli_error($c));
  while($data= mysqli_fetch_array($query1))
  {
    $susername = $data['username'];
    if($susername==$username){
      echo" <script> alert('username is already taken. please try another username'); window.location='sign up form.php' </script>";
    }
    else{
      $query= mysqli_query($c, "insert into user_info(name, email_address, username, password, gender) values ('{$name}', '{$email}', '{$username}','{$password}', '{$gender}')") or die ("error in query".mysqli_error($c));
   
      if($query){
        echo "<script> alert('successfully created profile'); window.location='login form.php'</script>";
        
      }
    }
  }
}
?>