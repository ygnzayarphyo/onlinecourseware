<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>pcci</title>
<link type="text/css" href="../css/style.css" rel="stylesheet" />

<script type="text/javascript">
function validateForms()
{
var a=document.forms["login"]["username"].value;
var b=document.forms["login"]["password"].value;
if (a==null || a=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<link rel="stylesheet" type="text/css" href="../tcal.css" />
<script type="text/javascript" src="../tcal.js"></script> 
<script src="../js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
<div id="wrapper">
	<div id="main">
		
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
		
		<div id="header">
			<img class="light-bulb" alt="" src="../images/lightbulb.png">
			<div class="header-text">
				<h1>Online Courseware</h1>
				<p>Welcome Teachers!</p>
			</div>
		</div>
		<div id="con">
			
			<h2 class="accordion-header">Log In</h2>
			<div class="accordion-content">
			<form action="teacherlogin.php" method="post" name="login" onsubmit="return validateForms()">
				Username: <br><input type="text" name="username" /><br>
				Password: <br><input type="password" name="password" /><br><br>
				<input type="submit" value="Log In">
			</form>	
			</div>
			
		</div>
</div>
<div class="clearfix"></div>
	</div>
</body>
</html>