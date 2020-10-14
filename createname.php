<?php 
session_start();
if(!$_SESSION['teacher']){
	header("location:login.php");
}
?>
<html>
	<head>
	<meta charset="utf-8">
		<title>SetExam</title>
		<link href="reg.css" rel="stylesheet" type="text/css"/>
		<style>
			input{
				border-radius:10px;
				width:40%;
				height:30px;
				margin-left:300px;
			}
		#s{
				background-color:green;
				border-radius:10px;
				width:20%;
				height:30px;
				font-size:20px;
				margin-left:400px;
			}
		
		select{
				border-radius:10px;
				width:40%;
				height:30px;
				margin-left:300px;
		}
		h5{
			color:white;
			font-size:20px;
			margin-left:30px;
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
				<form action="createdb.php" method="post">
				</br>
				</br>
				<center><h1 style="color:red">Examination details</h1></center>
				<h5>Set Exam Name</h5><input type="text" name="qname"></br></br>
				<h5>Set Exam Year</h5><input type="text" name="y"></br></br>
				<h5>Set Exam Month</h5>
				<select name="m">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">7</option>
				<option value="9">8</option>
				<option value="10">9</option>
				<option value="11">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select></br></br>
				<h5>Set Exam Date</h5><input type="text" name="d"></br></br>
				<h5>Set Exam Hour(ISO TIME)</h5><input type="text" name="h"></br></br>
				<h5>Set Exam Min</h5><input type="text" name="min"></br></br>
				<h5>Set Exam Duration(minutes)</h5><input type="text" name="dur"></br></br>
				<input id="s" type="submit" value="OK">
				</form>
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
