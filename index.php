<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halam Login</title>
</head>

<body>
	<h2>Form Login</h2>
	<form action="prosesLogin.php" method="POST" id="loginForm">
		<label for="username">Username</label><br>
		<input type="text" id="username" name="username" required autocomplete="off"><br><br>

		<label for="password">Password</label><br>
		<input type="password" id="password" name="password" required autocomplete="off"><br><br>

		<button type="button" class="button" id="loginButton">Login</button>
	</form>
</body>

</html>