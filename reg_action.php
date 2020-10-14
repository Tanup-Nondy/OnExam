<?php
$cn=mysqli_connect("localhost","root","");
$nam=$_POST['name'];
$unam=$_POST['username'];
$des=$_POST['des'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$type=$_POST['types'];
mysqli_select_db($cn,"project");
$ins="INSERT INTO user(name,username,designition,email,password,type)
values('$nam','$unam','$des','$email','$pass','$type')";
$chk=mysqli_query($cn,$ins);
if($chk)
{
	echo "You have successfully registered";
	header("location:Main.php");
}
else{
	die("Some error occur try with another username and password");
}
mysqli_close($cn);
?>