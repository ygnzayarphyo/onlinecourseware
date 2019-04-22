<?php
include('../db.php');
$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("UPDATE teacher SET mem_status='active' where id='$edittable[$i]'");
}
header("location: dteacher.php");
mysql_close($con);
?>