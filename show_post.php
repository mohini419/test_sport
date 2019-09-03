<?php 
    //include 
    include_once'detail_post.php';
?>


<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="sendstyle.css" rel="stylesheet" type="text/css">
    <title>Document Post</title>
</head>
<body>
    <div class="container">
    <h1>Post Form</h1>
    <div class="main">
        <form method="post" action="detail_post.php" class="abc" enctype="multipart/form-data">
        
        <div class="link">
            <label for="publication">Post Id</label>
            <input type="number" name="post_id">
        </div>

        <div class="link">
           <input type="submit" value="SHOW POST" name="Show">
            <button><a href="index.php">BACK</a></button>
        </div>
    </form>
   </div>
    
</body>
</html>