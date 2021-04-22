<?php
session_start();
require_once('conn.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 6</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=-10">
		<meta name="keywords" content="php, sql, html">
		<meta name="description" content="Basic php and sql datbase funtionality">
		<meta name="Eric Lavoie" content="CRUD Example">
		
		
		<!-- Bootstrap & jQuery includes -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

		<!-- CSS file for this  page -->
		<link rel="stylesheet" href="stylef.css">
		
	</head>
	<body>
			<?php

			$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

			if ($isLoggedIn === true) {

				echo "<h1><p>Welcome to the contacts Database, " . $_SESSION["username"] . ".</h1>";
					
				$sql = "SELECT id, first_name, last_name, email, phone, birthdate, added FROM contacts2;";

				$db_result = $db_conn->query($sql);

				if ($db_result->num_rows > 0) {
					
					echo "<table class='table table-sm-3 table-bordered table-danger'>
						<thead>
							<tr>
								<th 'class= col-sm-3'>ID</th>
								<th 'class= col-sm-3'>First</th>
								<th 'class= col-sm-3'>Last</th>
								<th 'class= col-sm-3'>Email</th>
								<th 'class= col-sm-3'>Phone</th>
								<th 'class= col-sm-3'>birthdate</th>
								<th 'class= col-sm-3'>Added</th>
								<th 'class= col-sm-3'>Delete</th>
								<th 'class= col-sm-3'>Edit</th>
							</tr>
						</thead>";
					// output data of each row
					while($row = $db_result->fetch_assoc()) {
					echo "<tbody >";	

						echo "<tr>";
						echo "<td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["birthdate"] ."</td><td>" . $row["added"] ."</td>";
						echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";

						echo "<td><a href='add.php?id=" . $row["id"] . "&action=edit&first_name=" . $row["first_name"] . "&last_name=" . $row["last_name"] . "&email=" . $row["email"] . "&phone=" . $row["phone"] . "&birthdate=" .$row["birthdate"] ."'>Edit</a></td>";
						echo "</tr>";

					echo "</tbody>";	
					}

					echo "</table>";

				} else {
					echo "<p>results</p>";
				}

				echo "<p><h2><a href='add.php?action=add'>Add new contact</a></h2></p>";
				
				echo "<p><h2><a href='main.php'>back</a><h2></p>";

			} else {
				
				echo '<script type="text/javascript">
					   window.location = "welcome.php"
				  </script>';	
				  
			}
			?>
	</body>
</html>