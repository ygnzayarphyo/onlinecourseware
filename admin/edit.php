<?php
include('../db.php');
$id=$_GET['id'];
	$results = mysql_query("SELECT * FROM student WHERE id='$id'");
	while($rows = mysql_fetch_array($results))
	  {
	  $fname=$rows['fname'];
	  $lname=$rows['lname'];
	  $address=$rows['address'];
	  $gender=$rows['gender'];
	  $email=$rows['email'];
	  $contact=$rows['contact'];
	  }
?>
<form action="saveedit.php" method="post">
<input type="hidden" name="id" value="<?php echo $id?>">
Firstname<br><input type="text" name="fname" value="<?php echo $fname?>"><br>
Lastname<br><input type="text" name="lname" value="<?php echo $lname?>"><br>
Address<br><input type="text" name="address" value="<?php echo $address?>"><br>
Gender<br><select name="gender">
<option>Male</option>
<option>Female</option>
</select><br>
Email<br><input type="text" name="email" value="<?php echo $email?>"><br>
Contact<br><input type="text" name="contact" value="<?php echo $contact?>"><br>
<input type="submit" value="save">
</form>