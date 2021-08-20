<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into users (user_name,password,email) values ('$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

	body{
		background-image: url("img/login.jpg");
		background-color: #c8f745;
		background-repeat: no-repeat;
		background-size:cover;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		/*margin: auto;*/
		margin: 10% 0% 5% 40%;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<label>Username</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label>Password</label>
			<input id="text" type="password" name="password"><br><br>
			<label>Email</label>
			<input id="text" type="email" name="email"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>