<?php
require_once('../db.php');





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../teacher/profilepic/" . $_FILES["image"]["name"]);
			
			$location="profilepic/" . $_FILES["image"]["name"];
			function clean($str) {
			$str = @trim($str);
			if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
			}
			return mysql_real_escape_string($str);
			}
			$fname=clean($_POST['fname']);
			$lname=clean($_POST['lname']);
			$mname=clean($_POST['mname']);
			$bday=clean($_POST['bday']);
			$address=clean($_POST['address']);
			$zipcode=clean($_POST['zipcode']);
			$gender=clean($_POST['gender']);
			$status=clean($_POST['status']);
			$contact=clean($_POST['contact']);
			$email=clean($_POST['email']);
			$username=clean($_POST['username']);
			$password=clean($_POST['password']);
			

			
			$update=mysql_query("INSERT INTO teacher(fname, lname, mname, bday, address, zipcode, gender, status, email, username, password, contact, pic, mem_status, log_status)
VALUES('$fname', '$lname', '$mname', '$bday', '$address', '$zipcode', '$gender', '$status', '$email', '$username', '$password', '$contact', '$location', 'active', '1')");
			
			
			//login success
echo '<script language="javascript">';
echo 'alert("Teacher Account successfully register")';
echo '</script>';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: home.php");
exit();
}
		
			}
	}


?>
