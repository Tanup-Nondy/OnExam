<?php 
session_start();
if(!$_SESSION['student']){
	header("location:login.php");
}
?>
<html>
	<head>
		<title>Student</title>
		<link href="home.css" rel="stylesheet" type="text/css"/>
		<style>
		#d{
			font-size:30px;
			margin-left:20px;
		}
		input{
			border-radius:10px;
			width:40%;
			height:30px;
			margin-left:250px;
		}
		#s{
			background-color:green;
				border-radius:10px;
				width:20%;
				height:30px;
				font-size:20px;
				margin-left:490px;
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
				<br></br><b>Enter the Examination name that your authority has given you to participate in the examination.</br>
				Dont logout when giving exam because if you logout once exam will be closed for you and you can give exam once, so be careful.</b></br></br>
				</p>
				<form action="date_difference.php" method="post">
					<div id="d">Exam Title<input class="f" type="text" name="ename"></div></br></br>
					<input id="s" type="submit" value="Start Exam"></br></br>
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
