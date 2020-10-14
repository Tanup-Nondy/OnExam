<?php 
session_start();
?>
<?php
$cn=mysqli_connect("localhost","root","");
$unam=$_POST['username'];
$pass=$_POST['pass'];
$type=$_POST['types'];
mysqli_select_db($cn,"project");
$col="SELECT * FROM user WHERE username='$unam' AND password='$pass' AND type='$type'";
$chk=mysqli_query($cn,$col);
//$result=mysqli_fetch_assoc($chk);
$count=mysqli_num_rows($chk);
if($count==1)
{

	if($type=="teacher"){
		$_SESSION['teacher']=$unam;
		header("location:teacher.php");
	}
	elseif($type=="student"){
		$_SESSION['student']=$unam;
		header("location:student.php");
	}
	else{
		header("location:admin.php");
	}
}
else{
	die("Incorrect username,password or type");
}
mysqli_close($cn);
?>