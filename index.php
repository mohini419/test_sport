<?php
//incluse database connection  value
include_once'connection.php';

$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection 
if($db->connect_error){
	die("connection failed:".$db);
}
/*else{
	echo "ok";
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>SPORT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="homestyle.css">
	
</head>
<body>
    <div class="container">
		<div class="nav">
			<div class=nav__links>
        		<a href="index.php">HOME</a>
        		<a href="sendpost.php">PUBLISH POST</a>
        		<a href="show_post.php">MANAGE PUBLICATION</a>
        		<a href="logout.php">LOGOUT</a>
    		</div><!--close navlinks-->
    		<div class="nav__img">
    			<img src="./img/logo2.png" >
    		</div>
        </div>
        <div class="main">
                
               <div class="row">
					<?php 
					  //fetching
						$query="SELECT title,msg,image,info FROM post";
                    
						//loop rows
						if($result=mysqli_query($db,$query))
						{
							while($row=mysqli_fetch_row($result)){
								echo('
									<div class="column"> 
										<img src="data:image/jpeg;base64,'.$row[2].'" style="width:100%">
										<div class="first">
											<h3>'.$row[0].'</h3>
										</div>
										<div class="cnt">
										<h4>'.$row[1].'<h5>
										</div>
										
										<h5>'.$row[3].'</h5>
										
									</div>');
							}
							mysqli_free_result($result);
						}
						mysqli_close($db);
                    ?>

			    </div><!--close  row-->                
        </div><!--close main-->
    </div><!--close container-->
</body>
</html>