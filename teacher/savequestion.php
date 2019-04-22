<?php
	require_once('auth.php');
?>
<?php
include('../db.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$questions=$_POST['questions'];
$cat=$_POST['cat'];
$ttt=$_POST['titl'];
$titleeee=$_POST['titleeee'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$aBook=$_POST['teacher'];
$date=date("Y/m/d");
$stat='deactivate';
mysql_query("INSERT INTO question (question, answer, teacher_id, date, status, cat, title) VALUES ('$questions', '$ans1', '$id', '$date', '$stat', '$cat', '$titleeee')");
$result = mysql_query("SELECT * FROM question where teacher_id='$id'");
while($row = mysql_fetch_array($result))
{
$qid=$row['id'];
}
mysql_query("INSERT INTO choices (question_id, answer) VALUES ('$qid', '$ans1')");
mysql_query("INSERT INTO choices (question_id, answer) VALUES ('$qid', '$ans2')");
mysql_query("INSERT INTO choices (question_id, answer) VALUES ('$qid', '$ans3')");
mysql_query("INSERT INTO choices (question_id, answer) VALUES ('$qid', '$ans4')");
$N = count($aBook);
for($i=0; $i < $N; $i++)
{
mysql_query("INSERT INTO question (question, answer, teacher_id, date, status, cat, title) VALUES ('$questions', '$ans1', '$aBook[$i]', '$date', '$stat', '$cat', '$titleeee')");
mysql_query("INSERT INTO qtitle (title, cat, tid) VALUES ('$titleeee', '$cat', '$aBook[$i]')");
}
header("location: list.php");
?>