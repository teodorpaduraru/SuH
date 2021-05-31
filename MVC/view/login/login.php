<!DOCTYPE html>
<html lang="en">
<head>
	<title>LogIn | Suh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/login_page.css">
</head>
<body>
	<form method="POST" action="LoginController.php">
		<div>
			<input id="userName" type="text" name="username" placeholder="Username">
		</div>
		<div>
			<input id="password" type="password" name="password" placeholder="Password">
		</div>
		<div>
			<input id="submitButton" type="submit" name="op" value="Log in">
		</div>
		<div>
			<label>Don't have an account? 
				<a id="signUp" href="SignupController.php">Sign up</a>
			</label>
		</div>
	</form>
</body>
</html>