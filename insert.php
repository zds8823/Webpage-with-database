<?php
require_once('conn.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];

$sql = "INSERT INTO contacts2 (first_name, last_name, email, phone, birthdate) VALUES ('$first_name', '$last_name', '$email', '$phone', '$birthdate');";

$db_conn->query($sql);

// send a link back to the browser, and issue a REDIRECT (302)
header("location:report.php");
?>