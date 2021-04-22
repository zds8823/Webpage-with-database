<?php

require_once('conn.php');
$id= $_REQUEST['id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];


$sql = "UPDATE contacts2 SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone', birthdate = '$birthdate' WHERE id = $id";

$db_conn->query($sql);

// send a link back to the browser, and issue a REDIRECT (302)
header("location:report.php");
?>