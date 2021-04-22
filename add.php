<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 6</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="php, sql, html">
		<meta name="description" content="Simple database functionality">
		<meta name="Eric Lavoie" content="CRUD Example">
		
		
		<!-- Bootstrap & jQuery includes -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

		<!-- CSS file for this  page -->
		<link rel="stylesheet" href="stylef.css">
		
	</head>
	

	<script type="text/javascript">
	function validateForm() { 
		var fn=document.form1.first_name.value;
		var ln=document.form1.last_name.value;
		var email=document.form1.email.value;
		var ph=document.form1.phone.value;
		var bd=document.form1.birthdate.value;

		if(fn=="" || ln =="" || email ==""|| ph =="" || bd == "") {	  
			document.getElementById("errorMessage").innerHTML="Please enter first name, last name, email, phone number and birthdate.";return false;	
		}
	}
	</script>
	<body "class= col-sm-3">

	<?php
	$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

	if ($isLoggedIn != true) {
		echo '<script type="text/javascript">
			   window.location = "welcome.php"
		  </script>';	
	}
	?>
	<div class = "left">
	<h1>Add/Edit Record</h1>
			<?PHP 
			if($_REQUEST['action']=='edit')
			{
			?>
				<form id="form1" name="form1" method="post" action="update.php?id=<?PHP echo $_REQUEST['id']; ?>" onSubmit="return validateForm();">
				<table width="200" border="1" class="table class= left table table-sm-3 table-danger" >
				  <tr>
					<td>First name</td>
					<td><label for="username"></label>
					   <input type="text" name="first_name" id="first_name" value="<?PHP echo $_REQUEST['first_name']; ?>" /></td>
				   </tr>
				  <tr>
					<td>Last name</td>
					<td><label for="last_name"></label>
					  <input type="text" name="last_name" id="last_name" value="<?PHP echo $_REQUEST['last_name']; ?>" /></td>
				  </tr>
				  <tr>
					<td>email</td>
					<td><label for="email"></label>
					  <input type="text" name="email" id="email" value="<?PHP echo $_REQUEST['email']; ?>" /></td>
				  </tr>
				  <tr>
					<td>Phone</td>
					<td><label for="phone"></label>
					  <input type="text" name="phone" id="phone" value="<?PHP echo $_REQUEST['phone']; ?>" /></td>
				  </tr>	  
				<tr>
					<td>Birthdate</td>
					<td><label for="birthdate"></label>
					  <input type="text" name="birthdate" id="birthdate" value="<?PHP echo $_REQUEST['birthdate']; ?>" /></td>
				  </tr>	  
				  <tr>
					<td><input type="submit" name="submit" id="submit" value="Submit" /></td>
					<td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
				  </tr>
				</table>

				</form>
			<?PHP
			}
			else
			{
			?>
				<form id="form1" name="form1" method="post" action="insert.php" onSubmit="return validateForm();">
				<table width="200" border="1" class="table class= left table table-sm-3 table-danger">
				  <tr>
					<td>First name</td>
					<td><label for="first_name"></label>
					   <input type="text" name="first_name" id="first_name" value="" /></td>
				   </tr>
				  <tr>
					<td>Last name</td>
					<td><label for="last_name"></label>
					  <input type="text" name="last_name" id="last_name" value="" /></td>
				  </tr>
				  <tr>
					<td>email</td>
					<td><label for="email"></label>
					  <input type="text" name="email" id="email" value="" /></td>
				  </tr>
				  <tr>
					<td>Phone</td>
					<td><label for="phone"></label>
					  <input type="text" name="phone" id="phone" value="" /></td>
				  </tr>	  
				  <tr>
					<td>Birthdate</td>
					<td><label for="birthdate"></label>
					  <input type="text" name="birthdate" id="birthdate" value="" /></td>
				  </tr>	  
				  <tr>
					<td><input type="submit" name="submit" id="submit" value="Submit" /></td>
					<td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
				  </tr>
				</table>

				</form>
			<?PHP } ?>
			<p id="errorMessage" style="color:#C00; font-style:italic;"></p>
		</div>
	</body>
</html>