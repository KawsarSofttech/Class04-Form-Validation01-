<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php

		if (isset($_POST["submit"])){
			if (!empty($_POST["username"]) && !empty($_POST["password"])){
				$user = "admin";
				$pass = "12345";
				if($user == $_POST["username"] && $pass == $_POST["password"]){
					echo "Logged in";
					// header("location: profile.php");
				}else{
					echo "Invalid User or Password";
				}
			}
		}
			
		
	?>
	<form method="POST" action="">
		<input type="text" name="username"><br>
		<input type="password" name ="password"><br>
		<input type="submit" name="submit" value="Log in">
	</form>


</body>
</html>