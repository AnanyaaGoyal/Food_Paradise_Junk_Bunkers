<?php
session_start();
?>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Food Paradise</title>
        <script type='text/javascript' src='Homepage.js'></script>
        <link rel='stylesheet' href='Homepage.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
    </head>
    <body style='background-color:#fef6c9;'>
    <div id= 'Outer_box' class='container-fluid' >
    <div class='container'>
            <nav class='navbar navbar-expand-lg navbar-fixed-top'>
                <a class='navbar-brand' href='#'><b>Food Paradise</b></a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                  <span class='navbar-toggler-icon'></span>
                </button>
              
                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                  <ul class='navbar-nav mr-auto'>
                    <li class='nav-item active' style='margin-left:25px;'>
                      <a class='nav-link' href='Homepage.php'> Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item dropdown' style='margin-left:15px;'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Communities
                      </a>
                      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                      <?php
                     include('connection.php');
                     $query= mysqli_query ($c, "select community_name from communities;") or die ("error". mysqli_error($c));
     
                     while($data= mysqli_fetch_array($query)){
                     $community= $data['community_name'];
                    echo "<a class='dropdown-item' href='#'>".$community. "</a>";
                    }
                     ?>
                      </div>
                    </li>
                    <li class='nav-item' style='margin-left:15px;'>
                      <a class='nav-link' href='#'>Recipes</a>
                      </li>
                   <li class='nav-item' style='margin-left:15px;'>
                  <a class='nav-link' href='create_community.php'>Create a Community</a>
                  </li>
                </ul>
                <ul class='navbar-nav navbar-right'>
                    <li class='nav-item' style='margin-left:15 px; text-align: center; margin-top: 3.5mm; color:#96c0b7;'>
                    Hello <?php echo $_SESSION["username"]; ?>
                    </li>
                   <li class='nav-item' style='margin-left:15px;'>
                    <a class='nav-link' href='post.html'> Post <span class='glyphicon glyphicon-plus'></span></a>
                  </li>
                  
                  <li class='nav-item' style='margin-left:15px; margin-right:15px;'>
                    <a class='nav-link' href='logout.php'> Logout <span class='glyphicon glyphicon-log-out'></span> </a>
                  </li>
                  </ul>
                  
                </div>
              </nav>
            </div>
            <br>
            <br>
            <br>
        
        
          <center><h1>Pick your recipe!</h1></center>
        
<br>
<br>   
<?php
include('connection.php');
$sql = 'SELECT post_id,recipe_name, recipe, image, chef FROM post';

$result = $c->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $post_id= $row['post_id'];
    $chef_name= $row['chef'];
    $recipe= $row['recipe'];
    $recipe_name= $row['recipe_name'];
    $image= $row['image'];
    $_SESSION['image']=$image;
    
     
  
  
echo"
<div class='container p-3 my-3'  id= 'top-recipes-home'>
    <div><img src='uploads/".$image."' alt='".$image."' width='300' height='250'>
      <div>
        <br>
    <button type='button' class='button' style='margin-right: 15px;'> <span class=' badge glyphicon glyphicon-thumbs-up' style='height:30px; text-align:center; padding-top:2.5mm;'> 1951</span></button>
    <button type='button' class='button' style='margin-right: 15px;'> <span class='badge  glyphicon glyphicon-share-alt' style='height:30px; text-align:center; padding-top:2.5mm;'>739</span></button>
    <button type='button' class='button'> <span class='badge glyphicon glyphicon-comment' style='height:30px; text-align:center; padding-top:2.5mm;'>182</span></button>
    </div>
    <br>
    <div>
        <input type='text' placeholder='comment' style='border-radius: 6px;color: black;'>
    </div>
    </div>
    
    <div style=><p id='123' style='flex: row; '>
      <h5 style='font-weight: bolder; text-align: center;'><center>".$recipe_name."</center></h5> <br> <p style='padding-left: 25px; padding-right: 20px;'>" .$recipe."
    
      <h5 style='font-weight: bolder; text-align: right;'>RECIPE BY ".$chef_name."</h5>
      <button onclick= 'readmore()' id='readmore' class='btn' style='margin-left: 20px;'> Read More
      </button>
    </div>
</div>
</div>";
}
}

?>
    <br>
  
    
  <br><br>
</div>
  </body>
</html>