<?php

include('connection.php');
$username= $_POST['username'];
$password= $_POST['password'];
$check = mysqli_query($c, "select username, password from user_info;") or die ("error ".mysqli_error($c));
while($data= mysqli_fetch_array($check))
  {
    $susername = $data['username'];
    $spassword = $data['password'];
    if($susername==$username && $spassword== $password){
if(isset($_POST['post-recipe'])){
  $chef= $_POST["username"];
  $recipe_name= $_POST['recipe-name'];
  $recipe= $_POST['recipe'];
  $image=$_FILES['image']['name'];
  $tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file("$tmp_name", "community_uploads/$image");
  
  $insert=mysqli_query($c, "insert into coffilicious (recipe_name, recipe, image, chef) values( '$recipe_name', '$recipe', '$image', '$chef')");
  echo "<script> alert('uploaded successfully'); window.location='coffilicious.php'</script>";
}
    }
    else{
        echo "<script>alert('incorrect password or username'); window.location='post_in_community.php' </script>";
    }

}

        
?>