<?php
include('../db.php');
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$contact=$_POST['contact'];
mysql_query("UPDATE student SET fname='$fname', lname='$lname', address='$address', gender='$gender', email='$email', contact='$contact' WHERE id='$id'");
header("location: student.php");
?>