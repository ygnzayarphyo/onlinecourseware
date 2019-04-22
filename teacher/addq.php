<form action="addqexec.php" method="post">
Question Title<br>
<input type="hidden" name="cat" value="<?php echo $_GET['id']; ?>" />
<input type="text" name="title" /><br>
<input type="submit" value="save">
</form>