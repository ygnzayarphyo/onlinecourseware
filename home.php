
<?php
@require_once ('auth.php');
include ('db.php');
?>
<html xmlns='http://www.w3.org/1999/xhtml' >
<head>
  <title>Student</title>
  <style>
	body {
		/*background: -moz-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;*/
		/*background: -webkit-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;*/
		/*background: linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;*/
		/*color: #d9d9d9;*/
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
</head>
<body> 
<br/>
<h1>welcome <?php echo $_SESSION['SESS_FIRST_NAME'] ?></h1>
<div class='wrapper'>
  <div class='header'>
    <div class='picnet_logo'>
    </div>
  </div>
  <div class='content'>
  <a href="index.php">logout</a> | 
  <a href="courses.php">courses</a>
</div>
</div>
<p>Categories below are types of exams which offer international certification from this academy. By clicking to take part in the exam, we assume student have already read and agree to the Term and Privcy Policy of this acdemy.</p>
<table border="1">
	<tr>
		<td>Code Number</td>
		<td>Subject Name</td>
		<td>action</td>
	</tr>
	
		<?php $res = mysql_query("SELECT * FROM  category_question");
		$stud_scores = mysql_query("SELECT * FROM stud_scores WHERE name=" . $_SESSION['SESS_MEMBER_ID']);
		while ($ro = mysql_fetch_array($res)) {
			echo "<tr>";
			echo "<td>" . $ro["id"] . "</td>";
			echo "<td>" . $ro["cat_title"] . "</td>";
			$id=-1;
			while ($roScore = mysql_fetch_array($stud_scores)) {
				if ($roScore["cat"] = $ro["cat_title"]) {
					$_SESSION[$roScore["id"]."_report_score"]=$roScore["score"];
					$_SESSION[$roScore["id"]."_report_cat"]=$roScore["cat"];
					$_SESSION[$roScore["id"]."_report_title"]=$roScore["title"];
					$id=$roScore["id"];
					break;
				}
			}
			echo "<td><a href='" . ($id<>-1 ? "certificate.php?id=".$id : "quiz.php?id=".$ro["id"])."'>";
			echo $id<>-1 ? "Certificate" : "go";
			echo "</a> </td>";
			echo "</tr>";
		}//end
	?>
</table>
  </body>
</html>