<?php
include ('db.php');
@session_start();
@include ("includes/now.fn");

$rowAns = $_SESSION["rowAns"];
$id;
if (isset($_POST["Submit1"])) {
	$totalMark = 0;
	for ($no = 1; $no <= 7; $no++) {
		$usrAns = $_POST[$no];
		echo $usrAns . "...." . $rowAns[$no][answer] . "<br/>";
		if (strcmp($usrAns, $rowAns[$no][answer]) == 0) {
			$totalMark++;
		}
	}
	$totalMark = intval(100 * $totalMark / 7) . " %";
	$score = $totalMark;
	$memberId = $_SESSION['SESS_MEMBER_ID'];
	$cats = $rowAns[1]["cat"];
	$titles = $rowAns[1]["title"];
	$exam_types = $rowAns[1]["exam_type"];
	//mysql_query("INSERT INTO stud_scores (name, date, score) VALUES ('$id', '$dateaaa', '$sdsd')");
	mysql_query("INSERT INTO stud_scores (name, date, score, cat, title, examtype) VALUES ('$memberId', '$now', '$score', '$cats', '$titles', '$exam_types')");
	$id = mysql_insert_id();
	$_SESSION[$id . "_report_score"]= $score;
	$_SESSION[$id . "_report_cat"]=$cats;
	$_SESSION[$id . "_report_title"]=$titles;
	echo $id;
	echo $_SESSION[$id . "_report_score"];
	echo $_SESSION[$id . "_report_cat"];
	echo $_SESSION[$id . "_report_title"];
}
?>
<script type="text/javascript">
window.location.href="certificate.php?id=<?php echo $id; ?>"</script>