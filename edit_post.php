<?php 
    include_once 'detail_post.php';
    if(isset($_SESSION['post_id'])){
        $id=$_SESSION['post_id'];
        //echo $id;
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT title,msg,info,img_image FROM mohini_post WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $title=$record['title'];
        $msg=$record['msg'];
        $info=$record['info'];
        $image=$record['image'];
        //$id=$record['id'];   
    }
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="sendstyle.css" rel="stylesheet" type="text/css">
    <title>edit post</title>
</head>
<body>
    <div class="container">
    <h1>Edit a Post</h1>
    <div class="main">
        <form method="post" action="detail_post.php" class="abc" enctype="multipart/form-data">

        <div class="">
            <input type="hidden" name="post_id"  value="<?php echo $id; ?>" >
        </div>
        
        <div class="link">
            <input  type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>">
        </div>

        <div class="link">
            <textarea cols="30"  rows="5" name="msg" placeholder="Enter Message"><?php echo $msg; ?></textarea>
        </div>  

        <div class="link">
             <textarea cols="30"  rows="3 " name="info" placeholder="Enter contact and email "><?php echo $info; ?></textarea>
        </div>

        <div class="link">
            <input  name="img_link" type="text" placeholder="Put image link" value="<?php echo $image; ?>">
        </div>

        <div class="link">
            <input type="submit" value="Edit" name="post_edit">
            <input type="submit" value="Delete" name="post_delete">

            <!--<button class="btn_read" name="submit" type="submit">PUBLISH</button>--> 
        </div>
    </form>
   </div>
    
</body>
</html>
