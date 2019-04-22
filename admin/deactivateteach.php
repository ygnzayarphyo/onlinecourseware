<?php
include('../db.php');
$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("UPDATE teacher SET mem_status='inactive' where id='$edittable[$i]'");
}
header("location: teacher.php");
mysql_close($con);
?>