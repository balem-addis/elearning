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
<link style="text/css" href="1.css" rel="stylesheet">
<head>
<style type="text/css">


.g {
	font-family: "Times New Roman", Times, serif;
}
.w {
	font-weight: bold;
}
.w {
	font-style: italic;
}
.w .w {
	font-size: 16px;
}
.w .w {
	font-size: 18px;
}
.w .w {
	font-size: 16px;
}
</style>
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
<script type='text/javascript'>
function check()
{


        var fname = document.getElementById('fname');
      var lname = document.getElementById('lname');
	  var id = document.getElementById('id');
	   var age = document.getElementById('age');
	  var sex=document.getElementById('sex');
	var dept = document.getElementById('dept');
	var year = document.getElementById('year');
	var sem = document.getElementById('sem');
		
	 
	
		  if(isAlphabet( fname, "Please fill your First Name in letters only")){
		  if(lengthRestriction(fname, 1, 20,"for your first name")){
	
		if(isAlphabet(lname, "please fill your Last Name in letters only")){  
	if(lengthRestriction(lname, 1, 15,"for your last name")){


		
		 if( isAlphanumeric( id, "Please fill your Id")){
		 if(lengthRestriction(id, 6, 13,"for your Id")){

		
	if(isNumeric(age, "please fill a numbered age only")){
	if(ageRestriction(age)){
		if(lengthRestriction(age, 1, 2,"enter valid age")){
		 if(madeSelection(sex,"please choose sex")){
			  if(madeSelection(dept,"please choose department")){
				   if(madeSelection(year,"please select year")){
					    if(madeSelection(sem,"please select semister")){
			 return true;
}
						}}} }}} }}} }}}
	return false;
	
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
		return true;}
		
	}
	function ageRestriction(elem){
    	if(elem.value<10 ||elem.value>120)
	{
	alert("enter valid age");
	elem.focus();
	return false;
	}
	else{
  return true;
	}
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>
<td  border="0"align="center"><img src="images/header.png" width="600" height="50"></td>
</tr></table>

<table border="0" width="1300"height="40" align="center" bgcolor=#778899 >
<tr>
<td align="center" valign="bottom" bgcolor=#778899><b><a href="registrar.php"class="a">Home</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registerstudent.php"class="a">Register Student</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registercourse.php"class="a">Curiculum Registration</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="department.php"class="a">Department</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="studentcourse.php"class="a">Assigncoursetostudent</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td align="right" border="0"><a href="logout.php"class="a">Logout</a></td></tr>
</table>
<br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 DMCTE</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><BR>
<form action="registerstudent.php" method="post" name="register" onSubmit="return check()">
<fieldset><legend align="center"><span class="w"><span class="w"> student registration form</span></span></legend>
  <span class="w"><span class="w">&nbsp;<br><br>
First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" id="fname" size="20%"><br><br>
Middle Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mname" id="mname" size="20%"><br><br>
Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" id="lname" size="20%"><br><br>
Id Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" id="id" size="20%"><br><br>
Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="age" id="age" size="20%"
 onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
 <?php
 //include('connection.php');
$result_set = mysql_query ("SELECT *FROM department");
 echo '<label>Department&nbsp</label>';
 echo '<select id="dept" name="department">';
echo '<option  selected>..select..</option>';
while ($row = mysql_fetch_array($result_set)) 
{

$department = $row['departmentname']; 
$departmentid = $row['departmentid'];

echo "<option value='$departmentid'>$department</option>";
}

echo '</select>';
echo'<br>';
echo'<br>';?>

Sex
<select type="dropdown"  name="sex"id="sex"> 
  <option selected >..select..</option>
  <option >Male</option>
  <option>Femal</option>
</select>
<br><br>

Year&nbsp;
<select type="dropdown"  name="year"id="year">
  <option selected>..select..</option>
  <option> I</option>
  <option>II</option>
  <option>III</option>
</select>
<br><br>
Semister
<select type="dropdown"  name="Semister"id="sem">
<option selected >..select..</option>
  <option>I</option>
  <option>II</option>
</select>
<br>
  </span>  </span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="register" name="register">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Cancel" name="cancel"><br>

<?php

	
if(isset($_POST['register']))
{

$firstname=$_POST['fname'];
$middlename=$_POST['mname'];
$lastname=$_POST['lname'];
$studentid=$_POST['id'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$department=$_POST['department'];
$year=$_POST['year'];
$Semister=$_POST['Semister'];
$password1=$studentid;
$password=($password1);


//$reg=mysql_query("insert into student values('$studentid','$firstname','$lastname','$age','$sex','$department','$year','$Semister','$firstname')");
$reg=mysql_query("insert into student values('$studentid','$firstname','$middlename','$lastname','$age','$sex','$department','$year','$Semister')");

if($reg){
	$re=mysql_query("insert into account  values('','','$studentid','$firstname','$password','student')");
echo "registered successfully!!";
 echo'<meta content="3;registerstudent.php" http-equiv="refresh"/>';
}
			else
			{
			echo"Student is not registered please try again!!";
			 echo'<meta content="3;registerstudent.php" http-equiv="refresh"/>';
			}}
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
<a href="viewdepartment.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Department</font></a><br>
<a href="viewdepartmentstudent.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * view Student</font></a><br>
<a href="viewcourse1.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * View Course</font></a>

</td>


</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
