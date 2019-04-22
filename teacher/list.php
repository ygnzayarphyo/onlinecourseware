<?php
	require_once('auth.php');
?>
<?php
			echo '<div style="display:none;">';
				$rrrr=$_POST['filter'];
			echo '</div>';
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
	  <script src="../js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="../vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
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
			echo'<img alt="Unable to View" src=' . (file_exists($row3["pic"]) ?  $row3["pic"] : "profilepic/Koala.jpg"). ' style="width: 182px; width: 182px; margin-left: 32px; margin-top: 21px;">';
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
		<form action="savecat.php" method="post">
		Category Name: <input type="text" name="category" /> <input type="submit" value="save" />
		</form>
		<?php
			include('../db.php');
			$result5 = mysql_query("SELECT * FROM category_question");
			while($row5 = mysql_fetch_array($result5))
			{
		?>
			<h2 class="accordion-header"><?php echo $row5['cat_title']?></h2>
			<div class="accordion-content">
				<a rel="facebox" href="addq.php?id=<?php echo $row5['cat_title']?>">Add Question Title</a><br>
				<ul>
				<?php
				$sadsas=$row5['cat_title'];
				$result = mysql_query("SELECT * FROM qtitle where tid='$id' AND cat='$sadsas'");
				while($row = mysql_fetch_array($result))
				  {
				  echo '<li><a rel="facebox" href="listq.php?id='.$row['id'].'&cat='.$sadsas.'&title='.$row['title'].'">'.$row['title'].'</a></li>';
				  }
				?>
				</ul>
			</div>
		<?php
			}
		?>
			<h2 class="accordion-header">Set Max item and score</h2>
			<div class="accordion-content">
				<form action="setitem.php" method="post">
				<input type="hidden" name="teacherid" value="<?php echo $id?>">
				Score to be correct:<br>
				<input type="text" name="score" value="10"><br>
				Items to be Taken:<br>
				<input type="text" name="items" value="10"><br> <br> 
				<input type="submit" value="Set">
				</form>
			</div>
		</div>
	</div>
</body>
</html>