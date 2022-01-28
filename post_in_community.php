<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }

        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }

        input:focus {
            background-color: aliceblue;
        }

        background-image {
            opacity: 0.5;
        }
    </style>
</head>

<body
    style=" background-image:url('pexels-adonyi-gábor-1414651.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <br><br><br><br><br><br><br>
    <h1 style="margin-left:18.5cm;">POST</h1>
    <div class="container" style="padding:10px; background-color:cadetblue; max-width: 40%; align-self: center;">
        <form action="check.php" method="post" enctype="multipart/form-data" autocomplete="on">

            <div class="form-group">
                <label for="Recipe Name">Recipe Name:</label>
                <input type="text" name="recipe-names" class="form-control" id="Recipe Name" placeholder="Recipe Name">
            </div>
            <div class="form-group">
                <label for="pwd">Recipe:</label>
                <textarea class="form-control" name="recipes" id="Recipe" placeholder="Write recipe here" rows="4"
                    cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="file">Select image</label>
                <input type="file" name="images" id="file"  multiple>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password" placeholder="password">
            </div>
            <center> <button type="reset" class="btn btn-primary"> Reset </button>
                <button type="submit"  value="start upload" name="post-recipes" class="btn btn-primary">Post</button>
            </center>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    
    
</body>

</html>