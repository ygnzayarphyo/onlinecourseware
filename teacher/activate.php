<?php
include('../db.php');

$bnm=$_POST['bnm'];
$teachId=$_POST['teacherId11'];
$date=date("Y/m/d");
$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	if($bnm=='activate')
	{
	$result = mysql_query("UPDATE question SET status='activate', date='$date', exam_type='regularquiz', num_use=num_use+1 where id='$edittable[$i]'");
	}
	if($bnm=='deactivate')
	{
		$result = mysql_query("UPDATE question SET status='deactivate' where id='$edittable[$i]'");
		$del = "DELETE FROM dum_sc WHERE teach_id = '$teachId' AND qid = '$edittable[$i]'";
		mysql_query($del);
	}
}
header("location: list.php");
mysql_close($con);
?>