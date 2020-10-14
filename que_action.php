<?php
session_start();
?>
<?php
$cn=mysqli_connect("localhost","root","","project");
$q=$_POST['detail'];
$opt1=$_POST['op1'];
$opt2=$_POST['op2'];
$opt3=$_POST['op3'];
$opt4=$_POST['op4'];
$ans=$_POST['ans'];
mysqli_select_db($cn,"project");
$name=$_SESSION["table1"];
$insert="INSERT INTO $name (details,opt1,opt2,opt3,opt4,answer)
values('$q','$opt1','$opt2','$opt3','$opt4','$ans')";
$chk=mysqli_query($cn,$insert);
if($chk){
	//echo "Question added successfully";
	header("location:question.php");
}
else{
	die("Some error occured");
}
mysqli_close($cn);
?>