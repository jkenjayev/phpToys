<!DOCTYPE html>
<html>
<head>
	<title>Work with form</title>
</head>
<body>
	<form action="valid.php" method="POST">
		<label for="username">Username:</label> <br />
		<input type="text" name="username" id="username"> <br />

		<label for="privateKey">Password:</label> <br />
		<input type="Password" name="privateKey" id="privateKey"> <br />

		<label for="email">Email:</label> <br />
		<input type="email" name="email" id="email"> <br />

		<label for="phoneNumber">Phone number:</label> <br />
		<input type="number" name="phoneNumber"> <br /> <br />

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>