<?php
include('../db.php');
$qid=$_GET['id'];
$result = mysql_query("DELETE FROM question where id='$qid'");
mysql_query("DELETE FROM sharequestion WHERE question='$qid'");
header("location: list.php");
?>