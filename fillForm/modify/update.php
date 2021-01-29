<?php 
	include"../init/connDB.php";
	$query = "SELECT * FROM users WHERE id=". $_GET['id'];
	$queryResult = mysqli_query($Connection, $query);

	while ($user = mysqli_fetch_assoc($queryResult)) {
		$id = $user['id'];
		$username = $user['username'];
		$email = $user['email'];
		$phoneNumber = $user['phoneNumber'];
		$id = $user['id'];
	}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Modify user</title>
</head>
<body>
	<div class="container">
		<form action="validateModify.php" method="POST">
			<label for="id">User id</label> <br>
			<input type="text" name="id" value="<?php echo $id; ?>"> <br />

			<label for="username">Username:</label> <br />
			<input type="text" name="username" id="username" value="<?php echo $username; ?>"> <br />

			<label for="email">Email:</label> <br />
			<input type="email" name="email" id="email" value="<?php echo $email; ?>"> <br />

			<label for="phoneNumber">Phone number:</label> <br />
			<input type="number" name="phoneNumber" value="<?php echo $phoneNumber; ?>"> <br /> <br />

			<input type="submit" name="submit" value="Submit">
	</form>
	</div>
</body>
</html>