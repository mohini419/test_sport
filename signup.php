
<?php 
	include_once'detail_signup.php';
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
			<h1>Register Here</h1>
		</div>
		<form method="post" action="detail_signup.php" > 
		<div class="container"> 
			<label class="fa fa-user-o"><b>User Name</b></label> 
			<input type="text" placeholder="Enter User Name" name="Username" required> 

			<label class="fa fa-user-o"><b>First Name</b></label> 
			<input type="text" placeholder="Enter First Name" name="Firstname" required>

			<label class="fa fa-user-o"><b>Last Name</b></label> 
			<input type="text" placeholder="Enter Last Name" name="Lastname" required> 
			
			<label class="fa fa-envelope-open-o"><b>Email</b></label> 
			<input type="text" placeholder="Enter Email" name="email" required> 

			<label  class="fa fa-key"><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="Password" id="pass" > 

			<label  class="fa fa-key"><b>Conform Password</b></label> 
			<input type="password" placeholder="Enter Conform Password" name="Conform_password" id="cnfirm_pass"> 

			
			<p>To create an account you have to agree our <a href="#">Terms & Privacy</a>.</p> 
			<input type="checkbox" checked="checked"> Agree with Term & Privacy 

			<div class="clearfix"> 
				
				 <input  type="submit" name="submit" value="Submit" onclick="validate()">
			</div> 
		</div> 
		
	</form> 

	</div>
	<script>
        function validate(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("cnfirm_pass").value;
            if (a!=b){
               alert("Wrong Passwords");
               return false;
            }
        }
     </script>
    
</body>
</html>



