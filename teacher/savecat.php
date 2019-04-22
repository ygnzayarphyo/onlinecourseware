
<?php
include('../db.php');
$category=$_POST['category'];
mysql_query("INSERT INTO category_question (cat_title)
VALUES ('$category')");
//header("location: list.php");
?>
<script type="text/javascript">
	window.location.replace("http://localhost/onlinecourseware/teacher/list.php");
</script>