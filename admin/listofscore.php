<?php
	@require_once('auth.php');
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
		<script src="../js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="../vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
	<br/>
<h1><a href="home.php">Admin Panel</a> -> list of score</h1>
<div id="wrapper">
			<?php
			include('../db.php');
			$id=$_SESSION['SESS_MEMBER_ID'];
			$result5 = mysql_query("SELECT * FROM category_question");
			while($row5 = mysql_fetch_array($result5))
			{
		?>
			<h2 class="accordion-header"><?php echo $row5['cat_title']?></h2>
			<div class="accordion-content">
				<ul>
				<?php
				$sadsas=$row5['cat_title'];
				$result = mysql_query("SELECT * FROM qtitle where cat='$sadsas'");
				while($row = mysql_fetch_array($result))
				  {
				  echo '<li><a rel="facebox" href="listscore.php?title='.$row['title'].'&cat='.$sadsas.'">'.$row['title'].'</a></li>';
				  }
				?>
				</ul>
			</div>
		<?php
			}
		?>
			<h2 class="accordion-header">Final Exam</h2>
			<div class="accordion-content">
				<ul>
				<li><a rel="facebox" href="listscorefinal.php">Final Exam Score</a></li>
				</ul>
			</div>
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
</body>
</html>