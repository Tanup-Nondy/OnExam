<html>
	<head>
		<title>Registration</title>
		<link href="reg.css" rel="stylesheet" type="text/css"/>
		<style>
			input{
				border-radius:10px;
				width:60%;
				height:30px;
			}
			.t{
				font-size:20px;
				padding-left:40px;
				color:white;
			}
			#s{
				background-color:green;
				border-radius:10px;
				width:20%;
				height:30px;
				font-size:20px;
				margin-left:230px;
			}
			select{
				border-radius:10px;
				width:60%;
				height:30px;
			}
			marquee{
				font-size:40px;
				color:red;
				background-color:#84655B;
				height:30px;
				padding:40px;
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
				<div id="mar"><marquee>Register here!</marquee></div>
					<form action="reg_action.php" method="post">
					</br>
					<center><h1>Registration Form</h1>
					<table width="100%">
					<tr>
					<td class="t">Name<td>
					<input type="text" name="name" required></td></tr>
					<tr>
					<td class="t">UserName</td>
					<td><input type="text" name="username" required></td></tr>
					<tr>
					<td class="t">Designition</td>
					<td><input type="text" name="des" required></td></tr>
					<tr>
					<td class="t">Email</td>
					<td><input type="email" name="email" required></td></tr><tr>
					<td class="t">Password</td>
					<td><input type="password" name="pass" required></td></tr>
					<tr>
					<td class="t">Type</td>
					<td><select name="types">
					<option value="student" selected="">Student</option>
					<option value="teacher">Teacher</option>
					</select></td></tr>
					</table>
					</br>
					<input id="s" type="submit" value="Submit">
					</br>
					</br>
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
