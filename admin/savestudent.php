<?php
session_start();
include('../db.php');
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
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
$teacher=clean($_POST['teacher']);

mysql_query("INSERT INTO student(fname, lname, mname, bday, address, zipcode, gender, status, email, username, password, contact, teacher, mem_status, log_status)
VALUES('$fname', '$lname', '$mname', '$bday', '$address', '$zipcode', '$gender', '$status', '$email', '$username', '$password', '$contact', '$teacher', 'active', '1')");
//login success
$errmsg_arr[] = 'USER SUCCESSFULLY REGISTERED';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: home.php");
exit();
}
?>