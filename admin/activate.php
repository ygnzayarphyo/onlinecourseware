<?php
include('../db.php');

$bnm=$_POST['bnm'];
$date=date("Y/m/d");
$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	if($bnm=='activate')
	{
	$result = mysql_query("UPDATE question SET status='activate', date='$date', num_use=num_use+1 where id='$edittable[$i]'");
	}
	if($bnm=='deactivate')
	{
		$result = mysql_query("UPDATE question SET status='deactivate' where id='$edittable[$i]'");
		mysql_query($del);
	}
}
header("location: allquestion.php");
mysql_close($con);
?>