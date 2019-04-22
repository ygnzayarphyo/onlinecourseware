
<?php
	@require_once('auth.php');
	include('../db.php');
?>
<?php

			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<div id="error">';
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
			}
			echo '</ul>';
			echo '</div>';
			unset($_SESSION['ERRMSG_ARR']);
			}
			?>
<html xmlns='http://www.w3.org/1999/xhtml' >
<head>
  <title>Admin</title>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	  <script src="src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : 'src/loading.gif',
			closeImage   : 'src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body> 
<h1>Admin Panel</h1> 
<div class='wrapper'>
  <div class='header'>
    <div class='picnet_logo'>
    </div>
  </div>
  <div class='content'>
  <a href="index.php">logout</a> | 
  <a href="teacher.php">teacher</a> | 
  <a href="student.php">student</a> | 
  <a href="dstudent.php">deactivated student</a> | 
  <a href="dteacher.php">deactivated teacher</a> | 
  <a href="listofscore.php">list score</a> |
  <a href="ateacher.php">add teacher</a> | 
  <a href="astudent.php">add student</a> | 
  <a href="allquestion.php">all question</a>
</div>
</div>
  </body>
</html>