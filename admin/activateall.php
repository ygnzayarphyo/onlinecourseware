<?php
include('../db.php');
$edittable=$_POST['selector'];
$date=date("Y/m/d");
$bnm=$_POST['bnm'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	if($bnm=='activate')
	{
	$result = mysql_query("UPDATE question SET status='activate', date='$date', exam_type='finalexam', num_use=num_use+1 where id='$edittable[$i]'");
	}
	if($bnm=='deactivate')
	{
		$result = mysql_query("UPDATE question SET status='deactivate' where id='$edittable[$i]'");
	}
}
header("location: allquestion.php");
mysql_close($con);
?>