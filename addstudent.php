<?php

$con=mysqli_connect("fdb1034.awardspace.net","4428573_stud","student123(*)","4428573_stud");
if (isset($_POST['add'])) {
	# code...

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$age=$_POST['age'];
$course=$_POST['course'];
$section=$_POST['section'];
$num=$_POST['num'];


$query=mysqli_query($con,"INSERT into stu (fname,lname,mname,age,course,section,num) VALUES ('$fname','$lname','$mname','$age','$course','$section','$num')");
if ($query==true) {
	echo '<script>alert("data inserted successfully");window.location.href="index.php";</script>';
}}
else if (isset($_POST['update'])) {

	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$age=$_POST['age'];
$course=$_POST['course'];
$section=$_POST['section'];
$id=$_POST['id'];

$query=mysqli_query($con,"Update stu set fname='$fname',lname='$lname',mname='$mname',age='$age',course='$course',section='$section' where id='$id'");

if ($query) {
	echo '<script>alert("data updated successfully");window.location.href="index.php";</script>';
}else{
	echo"failed to update";
}
}
else if (isset($_POST['drop'])) {
$id=$_POST['id'];
$query=mysqli_query($con,"delete from stu where id='$id'");
if ($query) {
	echo '<script>alert("you drop the data successfully");window.location.href="index.php";</script>';
}
}
?>