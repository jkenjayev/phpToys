<!DOCTYPE html>
<html>
<head>
	<title>The main page</title>
	<style type="text/css">
		table td {
			padding: 2px 4px;
		}
		table {
			text-align: center;
			font-color: yellow;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php 
			include"init/connDB.php";

			$queryOne = "SELECT * FROM users";
			$resultOfQueryOne = mysqli_query($Connection, $queryOne);

			echo "<a href='./init/form.php'><button>Create user</button></a>" . "<br />";

			echo "<table border=1 padding=10>";
			echo "<thead>";		
					echo "<td> Username </td>";
					echo "<td> email </td>";
					echo "<td> phone number </td>";
					echo "<td> modify</td>";
			echo "</thead>";
			while ($user = mysqli_fetch_assoc($resultOfQueryOne)) {
				echo "<tr>";
					echo "<td>". $user['username']. "</td>";
					echo "<td>". $user['email']. "</td>";
					echo "<td>". $user['phoneNumber']. "</td>";
					echo "<td><a href='modify/update.php?id=".$user['id']."'>update</a></td>";
				echo "</tr>";
			}
		 ?>
	</div>
</body>
</html>