<?php
 include_once'detail_signin.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="regstyle.css" rel="stylesheet" type="text/css">
    <title>registration</title>
</head>
<body>
	<div class="register">
		<div class="header">
			<h1>Sign In</h1>
		</div>
		<form method="post" action="detail_signin.php" > 
	
	
			<label class="fa fa-user-o"><b>User Name</b></label> 
			<input type="text" placeholder="Enter User Name" name="Username" required> 

			<label  class="fa fa-key"><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="Conform_password" required> 

			<div class="clearfix"> 
				<input  type="submit" name="Login" value="Login">
				
			</div> 
		</div> 
		
	</form> 

	</div>
    
</body>
</html>



