<?php
@require_once ('auth.php');
include ('db.php');
?>
<?php
$id = $_SESSION['SESS_MEMBER_ID'];
$qry = "UPDATE student SET log_status='2' WHERE id='$id'";
// to control exit while taking exam.
$result = mysql_query($qry);

$_SESSION["subjectId"] = $_REQUEST["id"];
$questionAns = mysql_query("SELECT * FROM question q WHERE q.cat IN (SELECT cat_title FROM category_question WHERE id=" . $_SESSION["subjectId"] . ") ORDER BY RAND() LIMIT 7");
$rowAns;
for ($i = 1; $i <= 7; $i++) {
	$rowAns[$i] = mysql_fetch_array($questionAns);
}
$_SESSION["rowAns"]=$rowAns;

?>
<style>
	body {
		/*background: -moz-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		 background: -webkit-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		 background: linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		 color: #d9d9d9;*/
		font-family: Tahoma, Arial, helvetica, sans-serif;
		font-size: 100%;
		line-height: 1em;
		min-width: 940px;
		margin: 0;
		padding: 0;
	}
	#list {
		background: url("images/darker-green.png") repeat-x scroll 0 0 transparent;
		margin: 0 auto;
		width: 30%;
		text-align: left;
		font-size: 40px;
		border: 1px solid #fff;
		padding: 50px;
		line-height: 45px;
		color: #000;
	}
	#score {
		margin: 0 auto;
		width: 30%;
		text-align: center;
		font-size: 40px;
		line-height: 50px;
	}
</style>
<br/>
<h1><a href="home.php">Student Panel</a> -> Quiz</h1>
<div style="padding: 0 0 10 25">
	<form action="checkQuiz.php" method="post">
		<?php
		for ($no = 1; $no <= 7; $no++) {
			echo "<br/>" . $no . ": " . $rowAns[$no]["question"] . "<br/>";
			$choices = mysql_query("SELECT * FROM choices WHERE question_id=" . $rowAns[$no]["id"]);
			while ($row = mysql_fetch_array($choices)) {
				$radioIndex = $no . "_" . $row["answer"];
				// index for radio text click
				echo '<input type="radio" id="' . $radioIndex . '" name="' . $no . '" value="' . $row["answer"] . '" />';
				echo '<label for="' . $radioIndex . '">' . $row["answer"] . '</label><br/>';
				$radioIndex++;
			}
		}
		?>
		<br/>

		<input type = "Submit" name = "Submit1" value = "Finish">
	</form>
</div>