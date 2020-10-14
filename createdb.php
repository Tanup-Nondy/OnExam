
<html>
<body>
<form action="question.php" method="post">
<?php
session_start();
$cn=mysqli_connect("localhost","root","","project");
$name=$_POST['qname'];
$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$h=$_POST['h'];
$min=$_POST['min'];
$dur=$_POST['dur'];
$_SESSION["table1"]="$name";
$_SESSION["t"]="$tim";
mysqli_select_db($cn,"project");
$ind="INSERT INTO date (name,year,month,dat,st_hr,st_m,duration_m)
VALUES('$name','$y','$m','$d','$h','$min','$dur')";
if(mysqli_query($cn,$ind)){
	$crete="CREATE TABLE $name (id INT PRIMARY KEY AUTO_INCREMENT,details VARCHAR(250),opt1 VARCHAR(30),opt2 VARCHAR(30),opt3 VARCHAR(30),opt4 VARCHAR(30),answer VARCHAR(30))";
	if(mysqli_query($cn,$crete))
	{

		header("location:question.php");
	}
	else
		echo " can't create exam"; 
	
}
else{
	die("could not insert date");
}

mysqli_close($cn);
?>

<input type="submit" value="OK">
</form>
</body>
</html>