<?php

    session_start();

    include_once'connection.php';
    
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/

    ///insert data into table
    if(isset($_POST['submit'])&&($_POST['Password']===$_POST['Conform_password'])){
         //varible initialization
        $Username=$_POST['Username'];
        $Firstname=$_POST['Firstname'];
        $Conform_password=$_POST['Conform_password'];
        $hash_pass = password_hash($Conform_password,PASSWORD_DEFAULT);//encrypt the password 
        $Lastname=$_POST['Lastname'];
        $email=$_POST['email'];
        

        //echo"DONE";
        $query="INSERT INTO signup_test(Username,Firstname,Conform_password,Lastname,email) VALUES ('$Username','$Firstname','$hash_pass',' $Lastname','$email')";
        mysqli_query($db,$query);
        //$_SESSION['msg']="Done sucessfully";
        header('location:signin.php');//rediect to index page after insertion

    }
    if(isset($_POST['submit'])&&($_POST['Password']!=$_POST['Conform_password'])){
        header('location:signup.php');
    }
?>