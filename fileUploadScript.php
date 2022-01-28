


    
        

<?php
session_start();
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Capstone_pass";
 $db = "food_paradise";
 $c =mysqli_connect($dbhost,$dbuser,$dbpass,$db) ;


if(isset($_POST['post-recipe'])){
  $chef= $_SESSION["username"];
  $recipe_name= $_POST['recipe-name'];
  $recipe= $_POST['recipe'];
  $image=$_FILES['image']['name'];
  $tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file("$tmp_name", "uploads/$image");
  
$query= mysqli_query($c, "insert into post(recipe_name, recipe, image, chef) values ('{$recipe_name}', '{$recipe}', '{$image}','{$chef}')") or die ("error in query".mysqli_error($c));
 if($query){ echo "<script> alert('uploaded successfully'); window.location='recipes.php'</script>";}

    
    else{
        echo "<script>alert('something is wrong'); window.location='post.html' </script>";
    }

}

        
?>