<?php
	require_once('auth.php');
?>
<html>
<head>
<title>pcci</title>
<link type="text/css" href="../css/style.css" rel="stylesheet" />
<!--sa poip up-->
	<link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	   <script src="../lib/jquery.js" type="text/javascript"></script>
	  <script src="../src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : '../src/loading.gif',
			closeImage   : '../src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
		<script src="runtime.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
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
		<input type="text" name="filter" value="" id="filter" class="ed" placeholder="Search..." /><br />
		<table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Gender</th>
							<th>Email</th>
						</tr>
					   </thead>
					   <tbody>
		<?php
		$result = mysql_query("SELECT * FROM student where teacher='$id'");

		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td><a rel='facebox' href='indiscore.php?id=".$row['id']."'>" . $row['lname'].', '.$row['fname'].' '.$row['mname'] . "</a></td>";
		  echo "<td>" . $row['address'] . "</td>";
		  echo "<td>" . $row['gender'] . "</td>";
		  echo "<td>" . $row['email'] . "</td>";
		  echo "</tr>";
		  }
		?> 
		</tbody>
		</table>
		</div>
	</div>
</body>
</html>