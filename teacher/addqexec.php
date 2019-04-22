
<?php
@require_once('auth.php');
include('../db.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$a=$_POST['cat'];
$b=$_POST['title'];
mysql_query("INSERT INTO qtitle (title, cat, tid) VALUES ('$b', '$a','$id')");
?>
<script type="text/javascript">
	window.location.href="http://localhost/onlinecourseware/teacher/list.php"
</script>