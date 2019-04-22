<?php
	include('../db.php');
	$id=$_GET['id'];
	$qry="UPDATE teacher SET log_status='1' WHERE id='$id'";
	$result=mysql_query($qry);
	header("location: index.php");
?>