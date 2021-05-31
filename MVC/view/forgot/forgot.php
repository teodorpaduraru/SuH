<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Forgot Password | SuH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/login_page.css">
</head>
<body>
	<form method="POST" action="LoginController.php">
		<div>
			<input id="email" type="text" name="email" placeholder="email">
		</div>
		<div>
			<input id="submitButton" type="submit" name="op" value="Send Recovery Email">
		</div>
		<div>
			<label>Ai deja un cont
				<a id="forgot" href="LoginController.php">Logare</a>
			</label>
		</div>
	</form>
</body>
</html>