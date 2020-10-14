<?php 
session_start();
if(!$_SESSION['teacher']){
	header("location:login.php");
}
?>
<html>
	<head>
		<title>Setexam</title>
		<link href="home.css" rel="stylesheet" type="text/css"/>
		<style>
		#b1{
			margin-left:150px;
			width:120px;
			height:30px;
			font-size:20px;
			background-color:#5C23BC;
		}
		#b2{
			margin-left:400px;
			width:140px;
			height:30px;
			font-size:20px;
			background-color:#5C23BC;
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
				<p>
				You can select set question to set a question for a examination you want to host.You will have to set several questions and time for the examination
				.</br></br>You can also choose show question to view questions that you have recently set for the examination.
				</p></br></br></br>
				<button id="b1"><a href="createname.php">SetExam</a></button>
				<button id="b2"><a href="show.php">ShowQuestion</a></button>
				</br>
				</br>
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
