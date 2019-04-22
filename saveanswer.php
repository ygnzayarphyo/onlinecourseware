<?php
require_once('auth.php');
include('db.php');
$hghggh=$_POST['question'];
$studid=$_POST['studid'];
$tchId=$_POST['teachId'];
$date=date('m/d/y');
$result5 = mysql_query("SELECT * FROM question WHERE id='$hghggh'");
		while($row5 = mysql_fetch_array($result5))
		{
		$correct=$row5['answer'];
		}
$aBook=$_POST['ans'];
$N = count($aBook);
for($i=0; $i < $N; $i++)
{
if($aBook[$i]==$correct)
{

		mysql_query("INSERT INTO scores (stud_id, date, correct, item, qid) VALUES ('$studid', '$date', '1', '1', '$hghggh')");
		//mysql_query("UPDATE question SET status='deactivate' WHERE id='$hghggh'");
		
		$sql = "INSERT INTO dum_sc (stud_id, qid, teach_id) VALUES ('$studid', '$hghggh', '$tchId')";
		mysql_query($sql);

}
if($aBook[$i]!=$correct)
{

		mysql_query("INSERT INTO scores (stud_id, date, correct, item, qid) VALUES ('$studid', '$date', '0', '1', '$hghggh')");
		//mysql_query("UPDATE question SET status='deactivate' WHERE id='$hghggh'");
		
		$sql = "INSERT INTO dum_sc (stud_id, qid, teach_id) VALUES ('$studid', '$hghggh', '$tchId')";
		mysql_query($sql);

}
}
//eader("location: quiz.php");
?>