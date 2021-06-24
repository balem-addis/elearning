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

			$result=mysqli_query($conn,"select * from account where accountid='$user_id'")or die(mysqli_error);
			$row=mysqli_fetch_array($result);
            $accountid=$row['accountid'];
			$firstname=$row['firstname'];
			$midlename=$row['midlename'];
			$lastname=$row['lastname'];
			$username=$row['username'];
			$password=$row['password'];
			?>
			
<html>
<head>
<link style="text/css" href="1.css" rel="stylesheet">
<style type="text/css">
.mujib {
	font-style: italic;
}
.mujib {
	font-style: italic;
	font-weight: bold;
	font-size: 16px;
}
.gg {
	color: #669;
}
.y {
	color: #6C9;
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


        var cname = document.getElementById('cname');
      var ccode = document.getElementById('ccode');
	  var chour = document.getElementById('chour');
	 
	  var dept = document.getElementById('dept');
	var year = document.getElementById('year');
	var sem = document.getElementById('sem');
	
	
		  if(isAlphanumeric( cname, "Please fill course Name ")){
		  if(lengthRestriction(cname, 2, 20,"for course Name")){
	
		if(isAlphanumeric(ccode, "please fill course code")){  
	if(lengthRestriction(ccode, 4, 10,"for course code")){

		if(isNumeric(chour, "please fill credit hour")){
	if(chourRestriction(chour)){
		if(lengthRestriction(chour, 1, 2,"enter valid credit hour")){
			
		 if(madeSelection(dept,"please choose department")){
				   if(madeSelection(year,"please select year")){
					    if(madeSelection(sem,"please select semister")){

		
		
			 return true;

				   }}}} }}}} }}
				
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


function chourRestriction(elem){
    	if(elem.value<1 ||elem.value>20)
	{
	alert("enter credit hour");
	elem.focus();
	return false;}
	else{
  return true;
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
		return true;
		
	}
}
</script>
</head>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>
<td  border="0"align="center"><img src="images/HEAD.png" width="600" height="50"></td>
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
</table><br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 BTVTC ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">

<br><BR>
<form action="registercourse.php" method="post" name="register" onSubmit=" return check()">
<fieldset><legend  align="center" class="mujib"> Course registration form</legend><br><br>
  <span class="mujib">
  
  Course Name&nbsp;
  <input type="text" name="cname" id="cname" size="20%"><br><br>
Course Code &nbsp;
<input type="text" name="ccode" id="ccode" size="20%"><br><br>
Credit Hour&nbsp;  &nbsp;
<input type="text" name="chour" id="chour" size="20%" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
Pre Requiest &nbsp;&nbsp;
<input type="text" name="pre" id="preq" size="20%"><br><br>
<?php
 //include('connection.php');
$result_set = mysqli_query($conn,"SELECT *FROM department");
 echo '<label>
 &nbsp&nbsp&nbspDepartment&nbsp</label>';
 echo '<select id="dept" name="department">';
echo '<option  selected>..select..</option>';
while ($row = mysqli_fetch_array($result_set)) 
{

$department = $row['departmentname']; 
$deptid=$row['departmentid'];

echo "<option value='$deptid'>$department</option>";
}

echo '</select>';
echo'<br>';
echo'<br>';?>

Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select type="dropdown"  name="year"id="year">
  <option selected>..select..</option>
  <option> I</option>
  <option>II</option>
  <option>III</option>
</select>
<br><br>
Semister&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select type="dropdown"  name="Sem" id="sem"><option selected >..select..</option><option>I</option><option>II</option></select><br><br>
  </span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="register" name="register">
&nbsp;&nbsp;&nbsp;&nbsp;       
<input type="reset" value="Cancel" name="cancel"><br>


<?php

	
if(isset($_POST['register']))
{

$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$chour=$_POST['chour'];
$pre=$_POST['pre'];
$dept=$_POST['department'];
$year=$_POST['year'];
$sem=$_POST['Sem'];



$reg=mysqli_query($conn,"insert into course values('$ccode','$cname','$chour','$pre','$dept','$year','$sem')");
if($reg){
	
echo "registered successfully!!";
echo'<meta content="3;registercourse.php" http-equiv="refresh"/>';
}
			else
			{
			echo"coursecode duplication occur";
			echo'<meta content="3;registercourse.php" http-equiv="refresh"/>';
			}}
mysqli_close($conn);

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
<a href="viewcourse1.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * View course</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright ©2021 BTVTC ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
