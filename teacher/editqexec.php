<?php
	require_once('auth.php');
?>
<?php
include('../db.php');
$questions=$_POST['questions'];
$ans1=$_POST['ans1'];
$qid=$_POST['qid'];
$aBook=$_POST['teacher'];
$date=date("Y/m/d");
$stat='deactivate';
$cat=$_POST['cat'];
$titleeee=$_POST['titleeee'];
mysql_query("UPDATE question SET question='$questions', answer='$ans1'
WHERE id='$qid'");

$N = count($aBook);
for($i=0; $i < $N; $i++)
{
mysql_query("INSERT INTO question (question, answer, teacher_id, date, status, cat, title) VALUES ('$questions', '$ans1', '$aBook[$i]', '$date', '$stat', '$cat', '$titleeee')");
mysql_query("INSERT INTO qtitle (title, cat, tid) VALUES ('$titleeee', '$cat', '$aBook[$i]')");
}
header("location: list.php");
?>