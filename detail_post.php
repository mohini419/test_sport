<?php
    //include database connection  value
    include_once'connection.php';
    session_start();
    $msg="";
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $msg=$_POST['msg'];
        $pqr=$_POST['image'];
        $image= base64_encode(file_get_contents($pqr));
        $info=$_POST['info'];

        $query = "INSERT INTO mohini_post(title,msg,image,info) VALUES ('$title','$msg','$image','$info')";
        mysqli_query($db,$query);
        header('location: index.php');
    }

    if(isset($_POST['Show'])){
        $post_id=$_POST['post_id'];
        $_SESSION['post_id']=$post_id;
        header('location:edit_post.php');
    }

    if(isset($_POST['post_delete'])){
        $post_id=$_POST['post_id'];
        mysqli_query($db,"DELETE FROM mohini_post WHERE id=$post_id");
        header('location: index.php');
       }

    if(isset($_POST['post_edit'])){
        $title=mysqli_real_escape_string($db,$_POST['title']);
        $msg=mysqli_real_escape_string($db,$_POST['msg']);
        $img_link=mysqli_real_escape_string($db,$_POST['img_link']);
        $info=mysqli_real_escape_string($db,$_POST['info']);
        mysqli_query($db,"UPDATE mohini_post SET title='$title',msg='$msg',image='$image',info='$info' WHERE id=$post_id");
        header('location:index.php');
        header('Location: index.php?id='.$post_id);
    }
?>