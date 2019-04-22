<?php
include('../db.php');
$tid=$_POST['teacherid'];
$score=$_POST['score'];
$items=$_POST['items'];
$ip_sql=mysql_query("select * from list_item where teacher_id='$tid'");
$count=mysql_num_rows($ip_sql);
if($count==0)
{
	mysql_query("INSERT INTO list_item (teacher_id, score, item) VALUES ('$tid', '$score','$items')");
}
else
{
	mysql_query("UPDATE list_item SET score='$score', item='$items' WHERE teacher_id='$tid'");
}
header("location: list.php");
?> 