<html>
	
<head>
<title>Certificate</title>
</head>

<body>
<h1><a href="home.php">Student Panel</a> -> Certificate</h1> 
<p>
<p>
	
	<?php
// this starts the session
@session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include("includes/now.fn");
$id=$_REQUEST["id"];
?>

<center>
<table border="0" cellspacing="10" cellpadding="2" background="images/certificate_border.png" style="background-size: 100% 100%;'">
	<tr>
		<td align="center" style="padding: 10px 10px 20px 10px;">
		<h1><?php echo  "Su Wut Yee Co. Ltd"; ?></h1>
		
		In recognition of successfully completing the course:<br>
		<strong><?php echo $_SESSION[$id."_report_cat"]." of ".$_SESSION[$id."_report_title"]; ?></strong>
		
		<h2>
			<?php echo $_SESSION['SESS_FIRST_NAME']; ?><br>	
		</h2>
		
		With Score: <b><?php echo  $_SESSION[$id."_report_score"]; ?></b> accuracy
		
		<i>is hereby awarded this</i>
		
		<h3>Certificate of Completion</h3>
						
		<i>Given this day, <?php echo  $now; ?><br>
		</td>
	</tr>
</table>
</center>

</body>

</html>