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
if(isset($_POST['post-recipes'])){
  $chefs= $_POST["username"];
  $recipe_names= $_POST['recipe-names'];
  $recipes= $_POST['recipes'];
  $images=$_FILES['images']['name'];
  $tmp_names=$_FILES['images']['tmp_name'];
move_uploaded_file("$tmp_names", "community_uploads/$images");
  
$inserts= mysqli_query($c, "insert into coffilicious(recipe_name, recipe, image, chef) values ('{$recipe_names}', '{$recipes}', '{$images}','{$chefs}')") or die ("error in query".mysqli_error($c));
  if ($inserts) {
  echo "<script> alert('uploaded successfully'); window.location='coffilicious.php'</script>";
}
}

    
    else{
        echo "<script>alert('incorrect password or username'); window.location='post_in_community.php' </script>";
    }


  }
}

        
?>