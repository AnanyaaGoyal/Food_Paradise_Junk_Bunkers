


    
        

<?php
session_start();
include('connection.php');

if(isset($_POST['post-recipe'])){
  $chef= $_SESSION["username"];
  $recipe_name= $_POST['recipe-name'];
  $recipe= $_POST['recipe'];
  $image=$_FILES['image']['name'];
  $tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file("$tmp_name", "uploads/$image");
  
  $insert=mysqli_query($c, "insert into post (recipe_name, recipe, image, chef) values( '$recipe_name', '$recipe', '$image', '$chef')");
 if($insert){ echo "<script> alert('uploaded successfully'); window.location='recipes.php'</script>";}

    
    else{
        echo "<script>alert('incorrect password or username'); window.location='post.html' </script>";
    }

}

        
?>