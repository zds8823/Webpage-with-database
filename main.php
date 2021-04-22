<?php
session_start();
require_once('conn.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 6</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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

		$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

		if ($action === "login") {
			
			$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
			$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

			$sql = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";

			$db_result = $db_conn->query($sql);

			if ($db_result->num_rows > 0) {
				$_SESSION["isLoggedIn"] = true;
				$_SESSION["username"] = $username;
			}
			
		} elseif ($action === "logout") {
			
			session_unset(); 
			session_destroy(); 	
			
		}

		$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

		if ($isLoggedIn === true) {

			echo "<p><h1>Welcome to the contacts Database, " . $_SESSION["username"] . ".</h1>";
			
			echo "<p><h2>Go to the <a href='report.php'>report page</a></h2></p>";
			
			echo "<p><h2><a href='main.php?action=logout'>logout</h2></a>";
			
		} else {
			
			echo '<script type="text/javascript">
				   window.location = "welcome.php"
			  </script>';	
			  
		}
		?>

	</body>
</html>