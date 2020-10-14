<?php 
session_start();
if(!$_SESSION['teacher']){
	header("location:login.php");
}
?>
<!doctype html>
<html>
<head>
<title>ShowQuestion</title>
<style>
div{
	width:100%;
	background_color:black;
	color:red;
}
</style>
</head>
<body>
<h1>Question List</h1>
<?php
$cn=mysqli_connect("localhost","root","","project");
mysqli_select_db($cn,"project");
$name=$_SESSION["table1"];
$count=1;
$select="SELECT * FROM $name ";
$result=mysqli_query($cn,$select);
while($row=mysqli_fetch_array($result)){
	echo '<div style="background-color:black;color:white;border:1px solid;border-color:white;font-size:20px;">';
	echo "Question:".$count."</br>";
	echo $row['details']."</br>";
	echo $row['opt1']."</br>";
	echo $row['opt2']."</br>";
	echo $row['opt3']."</br>";
	echo $row['opt4']."</br>";
	echo "Answer"."</br>";
	echo $row['answer']."</br>";
	echo "</div>";
	$count=$count+1;
}
mysqli_close($cn);
?>
</br><center><button><a href="Main.php">Goto Home Page</button></br>
</body>
</html>