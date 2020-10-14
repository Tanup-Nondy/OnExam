<?php 
session_start();
if(!$_SESSION['student']){
	header("location:login.php");
}
?>
<html>
<head>
<title>Examination</title>
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
	<h1><div id="time"></div></h1>

<?php
$cn=mysqli_connect("localhost","root","","project");
$name=$_SESSION["name"];
$_SESSION["exam"]=$name;
mysqli_select_db($cn,"project");
$time="SELECT * FROM date WHERE name='$name' ";
$get=mysqli_query($cn,$time);
if($get){
	$row1=mysqli_fetch_assoc($get);
		$year=$row1['year'];
		$month=$row1['month'];
		$day=$row1['dat'];
		$sth=$row1['st_hr'];
		$stm=$row1['st_m'];
		$t=$row1['duration_m'];
}	
else{
	die("Cannot find date");
}
$collect="SELECT * FROM $name ";
$result=mysqli_query($cn,$collect);
$count=0;
if($result){
	echo '<form id="form1" action="result.php" method="post">';
	while($row=mysqli_fetch_array($result)){
	$count=$count+1;
	echo '<div style="background-color:black;color:white;border:1px solid;border-color:white;font-size:20px;">';
	echo "Question:".$count."</br>";
	echo $row['details']."</br>";
	echo '<input type="radio" value="'.$row['opt1'].'" name="q_'.$row['id'].'">';
	echo $row['opt1']."</br>";
	echo '<input type="radio" value="'.$row['opt2'].'" name="q_'.$row['id'].'">';
	echo $row['opt2']."</br>";
	echo '<input type="radio" value="'.$row['opt3'].'" name="q_'.$row['id'].'">';
	echo $row['opt3']."</br>";
	echo '<input type="radio" value="'.$row['opt4'].'" name="q_'.$row['id'].'">';
	echo $row['opt4']."</br>";
	echo "</div>";
	}
	$_SESSION["c"]=$count;
	echo '</br>';
	echo "</br>"; 
	echo "<center>";
	echo '<input id="s" type="submit" value="Submit">';
	echo "</center>";
	echo '</form>';
}
else{
	die("The exam is not active or wrong exam name");
}
mysqli_close($cn);
?>
</div>
</div>
<script>
var ye="<?php echo $year; ?>";
var mo="<?php echo $month; ?>";
var d="<?php echo $day; ?>";
var sth="<?php echo $sth; ?>";
var stm="<?php echo $stm; ?>";
var s=mo+"/"+d+"/"+ye+" "+sth+":"+stm;
var x="<?php echo $t; ?>";
var t=new Date(s);
var dt=t.getTime();
var dn=new Date(); 
var t=dn.getTime();
var dif=dt-dn;
dif=parseInt(dif/1000);
var y=parseInt(x);
var t_sec=(y*60)+dif;
var m=parseInt(t_sec/60);
var s=parseInt(t_sec%60);
function check(){
	document.getElementById("time").innerHTML
	='Time left: '+m+'minutes '+s+'seconds';
	if(t_sec<=0){
		document.getElementById("form1").submit();
	}
	else{
		t_sec=t_sec-1;
		m=parseInt(t_sec/60);
		s=parseInt(t_sec%60);
		setTimeout("check()",1000);
	}
}
setTimeout("check()",1000);
</script>
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