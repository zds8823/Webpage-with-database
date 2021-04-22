<?php

$db_servername = "localhost";
$db_username = "122593l";
$db_password = "Vifveewt0";
$db_name = "122593l_db";

$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
	die("Connection failed: " . $db_conn->connect_error);
} 

?>