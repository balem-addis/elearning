<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['accountid']))
 {
  $user_id=$_SESSION['accountid'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
 <?php
			//include('connection.php');
			//session_start();

			//mag show sang information sang user nga nag login
			$user_id=$_SESSION['accountid'];

			$result=mysql_query("select * from account where accountid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
            $accountid=$row['accountid'];
			$firstname=$row['firstname'];
			$midlename=$row['midlename'];
			$lastname=$row['lastname'];
			$username=$row['username'];
			$password=$row['password'];
			?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="1.css" rel="stylesheet">
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/1.jpg"
demo2 = new Image();
demo2.src="images/2.jpg"
demo3 = new Image();
demo3.src="images/3.jpg"


demo4 = new Image();
demo4.src="images/4.jpg"
demo5 = new Image();
demo5.src="images/5.jpg" 
demo6 = new Image();
demo6.src="images/6.jpg"
demo7 = new Image();
demo7.src="images/7.png" 

}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<style type="text/css">
.one form fieldset br {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}
.one form fieldset {
	font-weight: bold;
}
.one form fieldset {
	font-style: italic;
}
</style>
<script type='text/javascript'>
function check()
{


        var fname = document.getElementById('fname');
      var mname = document.getElementById('mname');
	  var lname = document.getElementById('lname');
	  var unamee = document.getElementById('uname');
	  var pass = document.getElementById('pass');
	   var acctype = document.getElementById('acctype');
	   
	
		if(isAlphabet(fname,"please fill First name")){
		 if(lengthRestriction(fname, 2, 10,"for your first name")){
if(isAlphabet(mname,"please fill middle name")){
		 if(lengthRestriction(mname, 2, 10,"for your middle name")){	
if(isAlphabet(lname,"please fill last name")){
	if(lengthRestriction(lname, 2, 10,"for your last name")){
 if( isAlphanumeric( uname, "Please fill user name")){
		 if(lengthRestriction(uname, 2, 30,"for user name")){
if( isAlphanumeric( pass, "Please fill password")){
		 if(lengthRestriction(pass, 8, 32,"for password")){
			  if(madeSelection(acctype,"please choose account type")){

		
		 return true;
		}}}}  }}}} }}}
	return false;
	
}
	
  
  

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}



function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value =="..select.."){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
	
}
function isAlphabet(elem, helperMsg)
	{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else
		{
		alert(helperMsg);
		elem.focus();
		return false; 
	}}

</script>
</head>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>
tr>
<td  border="0"align="center"><img src="images/header.png" width="600" height="50"></td>

</tr></table>

<table border="0" width="1300"height="30" align="center" bgcolor=#778899 >
<tr>
<td bgcolor=#778899 align="center" valign="bottom">
  <div id="dropdown">
    <li>
   <a href="dean.php">Home</a></li>
   <li>
   <a href="assign.php">Assign Instructor</a></li>
  
   <li><a href="#">Create Account</a>
      <ul>
	        
		<li><a href="createdean.php">&nbsp;Dean and Registrar</a>
		<li><a href="createinstructor.php">&nbsp;&nbsp;Instructor</a>
	 </ul>
	</li>
	
	

	  <li><a href="#">View Account</a>
      <ul>
	        
		<li><a href="viewdean.php">&nbsp; Dean & registrar</a></li>
		<li><a href="viewinstructor.php">&nbsp;&nbsp;Active Instructor</a>
		<li><a href="inactiveinstructor.php">&nbsp;&nbsp;Inactive Instructor</a></li>
		
		
		

	  </ul>
	</li>
	 <li>
   <a href="deptinstructorview.php">View CourseInstructor</a></li>
	 <li><a href="viewdepartmentcourse.php">View Courses</a></li>
	<li><font size="4px"><a href="logout.php" id="logout" align="right">Logout</a></font></li>
</div>
</td>
</tr>
</table><br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one"><br><br>
<form action="createdean.php" method="post" onSubmit="return check()">
<fieldset>
<legend align="center"> create account for new dean</legend><br>
First Name   &nbsp;&nbsp;  &nbsp;
<input type="text" name="fname" id="fname"><br><br>
Midle Name&nbsp;  &nbsp;
<input type="text" name="mname" id="mname"><br><br>
Last Name  &nbsp;&nbsp;  &nbsp;
<input type="text" name="lname" id="lname"><br><br>
User Name    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" id="uname"><br><br>
Password  &nbsp;&nbsp;  &nbsp;&nbsp;
<input type="password" name="pass" id="pass"><br><br>
Conf Password 
<input type="password" name="confirmpass" id="confirmpass"><br><br>
Acc_Type&nbsp;  &nbsp;
<select name="actype" id="acctype"><option selected>..select..</option><option>dean</option><option>registrar</option></select><br><br>
<input type="submit" value="create" name="create" >
&nbsp;  &nbsp;&nbsp;  &nbsp;
<input type="reset" value="cancel" name="cancel" ><br>

<?php

	
if(isset($_POST['create']))
{

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$confirmpass1=$_POST['confirmpass'];
$password=md5($pass);
$confirmpass=md5($confirmpass1);
$actype=$_POST['actype'];
if($confirmpass!=$password)
{
	 echo "<font  size='5'color='red'>Password and confirPassword Not Match !!</font>";  
  echo'<meta content="2;createdean.php" http-equiv="refresh"/>';
	
}
else
{
$reg=mysql_query("insert into account  values('','$fname','$mname','$lname','$uname','$password','$confirmpass','$actype')");
if($reg){
	
echo "successfully registered !!";
  echo'<meta content="2;createdean.php" http-equiv="refresh"/>';
}
			else
			{
				echo"Not registered!!";echo'<br>';
		echo'<font color="red">';	echo" some thing error";
		  echo'<meta content="2;createdean.php" http-equiv="refresh"/>';
}}}
			
mysql_close($conn);

?>
</fieldset>
</form>
</td>
<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="viewdepartment1.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Department</font></a><br>
<a href="http://www.dbu.edu.et"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * DMCTE webSite </font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright ©  2018 DMCTE ELMS All rights reserved.</td>
</tr>

</table></body>
</html>
