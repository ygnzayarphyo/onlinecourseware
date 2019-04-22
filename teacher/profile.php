<?php
	require_once('auth.php');
?>
<?php
	include('../db.php');
	$id=$_SESSION['SESS_MEMBER_ID'];
	$qry="UPDATE teacher SET log_status='2' WHERE id='$id'";
	$result=mysql_query($qry);
?>
<html>
<head>
<title>pcci</title>
<link type="text/css" href="../css/style.css" rel="stylesheet" />

</head>
<body>
<div id="wrapper">
		<div id="proleft">
		<?php //echo $id ?>
		<?php
		include('../db.php');
		$id=$_SESSION['SESS_MEMBER_ID'];
		$result3 = mysql_query("SELECT * FROM teacher WHERE id='$id'");
		while($row3 = mysql_fetch_array($result3))
		{
			echo'<img alt="Unable to View" src=' . $row3["pic"] . ' style="width: 182px; width: 182px; margin-left: 32px; margin-top: 21px;">';
		}
		?><br>
		<div style="margin-left:30px; margin-top:10px;">
		<a href="list.php">List of Questions</a><br>
		<a href="listofstud.php">List of Students</a><br>
		<a href="listofscore.php">List of Scores</a><br>
		<a href="logout.php?id=<?php echo $id ?>">Log out</a><br>
		</div>
		</div>
		<div id="proright">
		</div>
	</div>
</body>
</html>