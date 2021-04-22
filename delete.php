<?php
require_once('conn.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM contacts2 WHERE id = $id;";

$db_conn->query($sql);

header("location:report.php");
?>