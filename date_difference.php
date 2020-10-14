<?php 
session_start();
if(!$_SESSION['student']){
	header("location:login.php");
}
?>
<html>
<body>
<h1 id="time"></h1>
<?php 
	$cn=mysqli_connect("localhost","root","","project");
	$name=$_POST['ename'];
	$_SESSION["name"]=$name;

	mysqli_select_db($cn,"project");
	$cd="SELECT * FROM date WHERE name='$name' ";
	$result2=mysqli_query($cn,$cd);
	if($result2){
		$row1=mysqli_fetch_assoc($result2);
		$year=$row1['year'];
		$month=$row1['month'];
		$day=$row1['dat'];
		$sth=$row1['st_hr'];
		$stm=$row1['st_m'];
		$duration=$row1['duration_m'];
	}
	else
	{
		die("Cant't fetch the table");
	}
?>
<script>
var y="<?php echo $year; ?>";
var m="<?php echo $month; ?>";
var d="<?php echo $day; ?>";
var sth="<?php echo $sth; ?>";
var stm="<?php echo $stm; ?>";
var s=m+"/"+d+"/"+y+" "+sth+":"+stm;
function load_home(){
            window.document.location.href='exam_action.php';
  }
var t=new Date(s);
var dt=t.getTime();
var dn=new Date(); 
var t=dn.getTime(); 
var dif=dt-t;
var m=0;
var s=0;
var h=0;
var t_s;
t_s=parseInt(dif/1000);

function check(){
document.getElementById("time").innerHTML='Time Till Exam: '+h+'hours '+m+'minutes '+s+'seconds';
 
t_s=t_s-1;
if(t_s<=0){
    load_home();
}
h=parseInt(t_s/3600);
var min=t_s-(h*3600);
m=parseInt(min/60);
s=(min%60);
setTimeout("check()",1000);
}
setTimeout("check()",1000);
</script>
</body>
</html>