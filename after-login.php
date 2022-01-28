<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Food Paradise</title>
        <script type="text/javascript" src="Homepage.js"></script>
        <link rel="stylesheet" href="Homepage.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <body>
      
        <div id= "Outer_box" class="container-fluid" >
          <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="container">
            <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <a class="navbar-brand" href="#"><b>Food Paradise</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="margin-left:25px;">
                      <a class="nav-link" href="Homepage.php"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown" style="margin-left:15px;">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Communities
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                     include('connection.php');
                     $query= mysqli_query ($c, "select community_name from communities;") or die ("error". mysqli_error($c));
     
                     while($data= mysqli_fetch_array($query)){
                     $community= $data['community_name'];
                    echo "<a class='dropdown-item' href='".$community.".php'>".$community. "</a>";
                    }
                     ?>
                      </div>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                      <a class="nav-link" href="recipes.php">Recipes</a>
                      </li>
                   <li class="nav-item" style="margin-left:15px;">
                  <a class="nav-link" href="create_community.php">Create a Community</a>
                  </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item" style="margin-left:15 px; text-align: center; margin-top: 3.5mm; color:#96c0b7;">
                   Hello <?php echo $_SESSION["username"]. "!!";
                   ?> 
                    </li>
                   <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link" href="post.html"> Post <span class="glyphicon glyphicon-plus"></span></a>
                  </li>
                  
                  <li class="nav-item" style="margin-left:15px; margin-right:15px;">
                    <a class="nav-link" href="logout.php"> Logout <span class="glyphicon glyphicon-log-out"></span> </a>
                  </li>
                  </ul>
                  
                </div>
              </nav>
            </div>
            <br>
            

            <div id="slides" class="carousel slide" data-ride="carousel">  
                <ol class="carousel-indicators">   
                    <li data-target="#slides" data-slide-to="0" class="active"></li>  
                    <li data-target="#slides" data-slide-to="1" ></li>  
                    <li data-target="#slides" data-slide-to="2"></li>
                      
                </ol>  
                <div class="carousel-inner">  
                    <div class="carousel-item active">  
                    <img src="pexels-nathan-cowley-1153369.jpg" width="100%" height="100%" alt="image">  
                        
                    </div>  
                    <div class="carousel-item">  
                        <img src="pexels-any-lane-5945865.jpg" width="100%" height="100%" alt="image">  
                        
                    </div>  
                    <div class="carousel-item">
                        <img src="pexels-ella-olsson-1640770.jpg" width="100%" height="100%" alt="image">
                        
                    </div>
                    </div> </div> 
                    
                    <br>
                    <br>
                    <br>
        
                    <div class="container-fluid" id="top-recipes">
                      <h1>Our Top Recipes</h1>
                    </div>
<br>
<br>
                    <!-- container1 for recipe-->
  <div class="container p-3 my-3 "  id= "top-recipes-home">
    <div><img src="recipe1.jpg" alt="recipe1" width="300" height="250">
      <div>
        <br>
    <button type="button" class="button " style="margin-right: 15px;"> <span class=" badge glyphicon glyphicon-thumbs-up" style="height:30px; text-align:center; padding-top:2.5mm;">9431</span></button>
    <button type="button" class="button" style="margin-right: 15px;"> <span class="badge  glyphicon glyphicon-share-alt" style="height:30px; text-align:center; padding-top:2.5mm;">739</span></button>
    <button type="button" class="button"> <span class="badge glyphicon glyphicon-comment" style="height:30px; text-align:center; padding-top:2.5mm;">182</span></button>
    </div>
    <br>
    <div>
        <input type="text" placeholder="comment" style="border-radius: 6px;color: black;">
    </div>
    </div>
    
    <div style=><p id="123" style="flex: row; ">
      <h5 style="font-weight: bolder; text-align: center;">COOL RANCH ELOTE</h5> <br> <p style="padding-left: 25px; padding-right: 20px;"> stovetop or outdoor grill to medium high heat. In a medium bowl, whisk to combine yogurt, milk and ranch seasoning mix; set aside. In a medium bowl, stir to combine parmesan cheese, crushed doritos and chili powder; set aside.<span id="dots">.......</span><span id="more"><br><br>
      Brush corn with melted butter, then grill until lightly charred, about 2-3 minutes per side. Remove corn from grill and brush kernels on all sides with the yogurt. Sprinkle over cheese and dorito mixture to coat and then drizzle over more yogurt sauce. Top corn with chives, a pinch of cayenne pepper and squeeze over lime.</p>
    </span> <hr>
      <h5 style="font-weight: bolder; text-align: right;">RECIPE BY JOHN</h5>
      <button onclick= "readmore()" id="readmore" class="btn" style="margin-left: 20px;"> Read More
      </button>
    </div>
    <br>
  </div>
    
  <br><br>
   
  <!-- container2 for recipe-->
  <div class="container p-3 my-3"  id= "top-recipes-home" >
  
  
    <div style=><p id="123" style="flex: row; ">
      <h5 style="font-weight: bolder; text-align: center;">ASIAN PASTA SALAD</h5> <br> <p style="padding-left: 25px; padding-right: 20px;"> In large pot with boiling water, cook pasta.<br><br>
        Drain, rinse pasta with cold water and let drain again. Place pasta in a large salad bowl, add broccoli, next 3 ingredients and toss well.<span id="period">.......</span> <span id="more_Info"><br><br>In a small bowl or jar with lid, combine soy sauce and remaining 6 ingredients. Whisk together or cover tightly and shake vigorously. Pour mixture over pasta and toss gently.</p></span>
        <hr>
      <h5 style="font-weight: bolder; text-align: right; padding-right: 10px;">RECIPE BY SANJAY KAPOOR</h5>
      <button onclick= "knowmore()" id="buttonId" class="btn btn-primary" style="margin-left: 20px;"> Read More </button>
      
    </div>
    <div><img src="recipe2.jfif" alt="recipe1" width="300" height="250">
      <div>
        <br>
    <button type="button" class="button" style="margin-right: 15px;"> <span class=" badge glyphicon glyphicon-thumbs-up " style="height:30px; text-align:center; padding-top:2.5mm;">7432</span></button>
    <button type="button" class="button" style="margin-right: 15px;"> <span class="badge glyphicon glyphicon-share-alt" style="height:30px; text-align:center; padding-top:2.5mm;">863</span></button>
    <button type="button" class="button"> <span class="badge glyphicon glyphicon-comment" style="height:30px; text-align:center; padding-top:2.5mm;">791</span></button>
    </div>
    <br>
    <div>
        <input type="text" placeholder="comment" style="border-radius: 6px;color: black;">
    </div>
    </div>
  <br><br>
  </div>

  <br><br><br>

<br><br><br>

<div class="grid-container">
  <div class="grid-item item1">
<h2 style=" color:#127761; font-weight: bolder; font-size: larger;">OUR TOP CHEFS</h2></div>
      <div class="grid-item item2"><span><video loop width="320" height="240" autoplay muted>
  <source src="chef run.webm" type="video/WebM">
  Your browser does not support the video tag.
</video></span></div><br>
</div>
<br><br><br>
<div class="container-fluid" id="top-chefs-display">
<div class="card-deck">
 
  <div class="card" style="width:250px; height:400px;">
    <div class="flip-card">
    <div class="card-body">
      <h4 class="card-title">Chef 1</h4>
      </div>
      <div class="flip-card-inner">
        <div class="flip-card-front">
    <img class="card-img-bottom" id="top-chef-card" src="chef-card.jpg" alt="Card image">
    </div>
    <div class="flip-card-back">
      <h1>Ananya Goyal</h1>
      <img src="WhatsApp Image 2021-09-13 at 19.11.01.jpeg" alt="Avatar" id="top-chef-card" >
    </div>
    </div>
  </div>
</div>

<div class="card" style="width:250px; height:400px;">
  <div class="flip-card">
  <div class="card-body">
    <h4 class="card-title">Chef 2</h4>
    </div>
    <div class="flip-card-inner">
      <div class="flip-card-front">
  <img class="card-img-bottom" id="top-chef-card" src="chef-card.jpg" alt="Card image">
  </div>
  <div class="flip-card-back">
    <h1>Krushangi Shingala</h1>
    <img src="WhatsApp Image 2021-09-20 at 07.38.45.jpeg" alt="Avatar" id="top-chef-card" >
  </div>
  </div>
</div>
</div>
<div class="card" style="width:250px; height:400px;">
  <div class="flip-card">
  <div class="card-body">
    <h4 class="card-title">Chef 3</h4>
    </div>
    <div class="flip-card-inner">
      <div class="flip-card-front">
  <img class="card-img-bottom" id="top-chef-card" src="chef-card.jpg" alt="Card image">
  </div>
  <div class="flip-card-back">
    <h1>Riya Dhar</h1>
    <img src="WhatsApp Image 2021-09-20 at 14.38.15.jpeg" alt="Avatar" id="top-chef-card" >
  </div>
  </div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br><br><br>
<div class="container-fluid" id="top-recipes">
  <h1>Our Top Communities</h1>
</div>
<br><br><br>
<div class="container p-3 my-3 text-white" style="display:flex " id="top-communities-cards">
<div class="container">
  <div class="card" style="width:300px" id="rise">
    <img class="card-img-top" style="height: 176px;"
      src="https://img.choice.com.au/-/media/620fec497d9744feaddb3a194e860d01.ashx" alt="Card image"
      style="width:100%">
    <div class="card-body">
      <div>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class=" badge glyphicon glyphicon-thumbs-up "
            style="height:30px; text-align:center; padding-top:2.5mm;">7432</span></button>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class="badge glyphicon glyphicon-share-alt"
            style="height:30px; text-align:center; padding-top:2.5mm;">863</span></button>
      </div>
      <h4 class="card-title">CHOCOLATE</h4>
    </div>
  </div>
</div>

<div class="container">
  <div class="card" style="width:300px" id="rise">
    <img class="card-img-top" style="height: 176px;"
      src="https://res.cloudinary.com/sagacity/image/upload/c_crop,h_669,w_1000,x_0,y_0/c_scale,w_1080/v1428939328/shutterstock_114227986_r0tpyn.jpg"
      alt="Card image" style="width:100%">
    <div class="card-body">
      <div>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class=" badge glyphicon glyphicon-thumbs-up "
            style="height:30px; text-align:center; padding-top:2.5mm;">7432</span></button>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class="badge glyphicon glyphicon-share-alt"
            style="height:30px; text-align:center; padding-top:2.5mm;">863</span></button>
      </div>
      <h4 class="card-title">KALE</h4>
    </div>
   </div>
</div>

<div class="container">
  <div class="card" style="width:300px" id="rise">
    <img class="card-img-top" style="height: 176px;"
      src="https://2bffkp1z79qu3yw7q614droo-wpengine.netdna-ssl.com/wp-content/uploads/2017/07/alphonso-mango-stock-image-1-1024x686.jpg"
      alt="Card image" style="width:100%">
    <div class="card-body">
      <div>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class=" badge glyphicon glyphicon-thumbs-up "
            style="height:30px; text-align:center; padding-top:2.5mm;">7432</span></button>
        <button type="button" class="button" style="margin-right: 15px;"> <span
            class="badge glyphicon glyphicon-share-alt"
            style="height:30px; text-align:center; padding-top:2.5mm;">863</span></button>
      </div>
      <h4 class="card-title">MANGO</h4>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>

 <footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>Food Paradise is a platform where you can share your healthy recipes and connect.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+91 8460488474</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>ananyagoyal128@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="#"> Recipes</a></div>
       <div><a href="#">Users</a></div>
       <div><a href="#">Communities</a></div>
       <div><a href="#">Sitemap</a></div>
       <div><a href="#">Code of Conduct</a></div>
       <div><a href="#">Blogger Help</a></div>
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2020 <a href="#">Food Paradise</a> All rights reserved</p>
   </div>
 </footer>







</div>


    </body>
</html>