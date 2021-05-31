<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp | SUH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/signin_page.css">
</head>
<body>
	<form method="POST" action="SignupController.php">
		<div>
			<input id="email" type="email" name="email" placeholder="Email">
		</div>
		<div>
			<input id="userName" type="text" name="username" placeholder="Username">
		</div>
		<div>
			<input id="password" type="password" name="password" placeholder="Password">
		</div>
		<div>
			<input id="submitButton" type="submit" name="op" value="Sign up">
		</div>
		<div>
			<label>Ai deja un cont 
				<a id="logIn" href="LoginController.php">Log in</a>
			</label>
		</div>
	</form>
</body>
</html>