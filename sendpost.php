<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="sendstyle.css" rel="stylesheet" type="text/css">
    <title>send post</title>
</head>
<body>
	
	<div class="container">
    <h1>Make a Post</h1>
	<div class="main">
        <form method="post" action="detail_post.php" class="abc" enctype="multipart/form-data">
        
        <div class="link">
     	    <input  type="text" name="title" placeholder="Enter title">
        </div>

        <div class="link">
     	    <textarea cols="30"  rows="5" name="msg" placeholder="Enter Message"></textarea>
        </div> 	

        <div class="link">
        	 <textarea cols="30"  rows="3 " name="info" placeholder="Enter contact and email "></textarea>
        </div>

        <div class="link">
             <input  name="image" type="text" placeholder="select image">
        </div>

        <div class="link">
            <button class="btn_read" name="submit" type="submit">PUBLISH</button> 
            <button class="btn_read" name="submit" type="button"><a href="index.php ">BACK</a></button> 
        </div>
    </form>
   </div>
	
</body>
</html>

