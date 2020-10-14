<?php 
session_start();
if(!$_SESSION['teacher']){
	header("location:login.php");
}
?>
<html>
	<head>
		<title>Questions</title>
		<link href="home.css" rel="stylesheet" type="text/css"/>
		<style>
		table td{
			font-size:30px;
			padding:20px;
		}
		input{
			border-radius:10px;
			width:60%;
			height:30px;
		}
		.s{
			background-color:green;
			border-radius:10px;
			width:20%;
			height:30px;
			font-size:20px;
			margin-left:230px;
		}
		#s{
			background-color:green;
			border-radius:10px;
			width:30%;
			height:30px;
			font-size:20px;
			margin-left:230px;
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
					<li><a href="login.php">Login</a></li>
					<!--<li><a href="logout.php">Logout</a></li>-->
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
			<form action="que_action.php" method="post">
				<table width="100%">
				<tr>
				<td>Question</td>
				<td><input type="text" name="detail" required></td></br></br>
				</tr>
				<tr>
					<td>Option1</td>
					<td><input type="text" name="op1" required></td>
				</tr>
				<tr>
					<td>Option2</td>
					<td><input type="text" name="op2" required></td>	
				</tr>
				<tr>
					<td>Option3</td>
					<td><input type="text" name="op3" required></td>
				</tr>
				<tr>
					<td>Option4</td>
					<td><input type="text" name="op4" required></td>
				</tr>
				<tr>
					<td>Answer</td>
					<td><input type="text" name="ans" required></td>
				</tr>
				<tr>
				<td colspan="2"><center><input class="s" type="submit" value="Submit"></center></td>
				</tr>
				</table>
				</form>
				</br>
				<center><button id="s"><a href="show.php">Finish And Show Question?</a></button></center>
			</br></br>				
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
