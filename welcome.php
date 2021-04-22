<!DOCTYPE HTML>
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

		<form action="main.php" method="post">
			<h1>Welcome to the contacts database, please login.</h1>
				<div class="login table table-sm-3 table-danger">
					<div class="container">
						Username: <input type="text" name="username"><br>
						Password: <input type="password" name="password"><br>
						</br>
						<input type="hidden" name="action" value="login"/>
						<input type="submit"/>
					</div>
				</div>
		</form>

	</body>
</html>