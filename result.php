<?php 
session_start();
if(!$_SESSION['student']){
	header("location:login.php");
}
?>
<html>
<body>
<html>
<head>
<title>Result</title>
<link href="home.css" rel="stylesheet">
<style>
#s{
	width:20%;
	border-radius:10px;
	height:30px;
	background-color:green;
	color:white;
}
</style>
</head>
<body>
<div class="fix header_area">
			<div class="fix stracture header">
				 <div class="fix logo floatleft">
					<img src="img/ima.jpg"/>
				</div>
				<div class="social_icon-area">
					<div class="scial_icon">
						<a href="http://www.facebook.com"><img src="img/facebook.png"/></a>
						<a href="http://www.twitter.com"><img src="img/twitter.png"/></a>
						<a href="http://www.feed.com"><img src="img/feed.png"/></a>
				   </div>
				</div>
		    </div>
		</div>	
		<div class="fix slider_area">
			<div class="fix stracture slider">
						<img src="img/bg.jpg"/>
			</div>
		</div>
		
		<div class="fix mainmenu_area">
			<div class="fix stracture mainmenu">
				<ul>
					<li style="background:#E04343;color:#fff;border-radius:5px"><a href="home.php">Home</a></li>
					<li><a href="registration.php">Registration</a></li>
					<!--<li><a href="login.php">Login</a></li>-->
					<li><a href="logout.php">Logout</a></li>
					<li><a href="examrules.php">Exam Rules</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
				<div class="fix search floatright">
					<input type="search" name="name" placeholder="Search..."/>
				</div>
		    </div>
			    
		</div>
		<div class="fix main_content_area">
			<div class="fix stracture main_content">
<?php
$cn=mysqli_connect("localhost","root","","project");
for($i=1;$i<=$_SESSION["c"];$i++){
	$n[$i]=$_POST["q_$i"];
}
$name=$_SESSION["exam"];
mysqli_select_db($cn,"project");
$select="SELECT * FROM $name ";
$result=mysqli_query($select);
if($result){
	$cal=0;
	$c=1;
	while($row=mysqli_fetch_array($result)){
		if($row['answer']==$n[$c]){
			$cal=$cal+1;
		}
		$c=$c+1;
	}
}
echo '</br>';
echo '</br>';
echo '<h1>';
echo "You got ".$cal;
echo "</h1>";
echo '</br>';
echo '</br>';
session_destroy();
mysqli_close($cn);
?>

<center><button style="background-color:green;"><a href="home.php">Goto Home</a></button></center>
</div>
</div>
<div class="fix footer_area">
			<div class="fix stracture footer">
			  <p>
					
					Tanup Kumar Nondy,Md. Fozle Rabbi,Monira Rezoana Alesha<br>
					Dept. of CSE (University of Barisal, Bangladesh).<br>
					@ 2017 Onexam.com, All Rights Reserved.<br>
					
				</p>
		    </div>
		</div>
	</body>
</html>