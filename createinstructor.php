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
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="1.css" rel="stylesheet">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
.one form fieldset legend {
	font-weight: bold;
}
.one form fieldset legend {
	font-style: italic;
}
.one form fieldset {
	font-style: italic;
	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
	text-align: center;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script type='text/javascript'>
function check()
{


        var insid = document.getElementById('insid');
      var fname = document.getElementById('fname');
	  var mname = document.getElementById('mname');
	  var lname = document.getElementById('lname');
	   var sex = document.getElementById('sex');
	  
	
		
	  if( isAlphanumeric( insid, "Please fill Id")){
		 if(lengthRestriction(insid, 3, 5,"for instructor Id")){
	
		  if(isAlphabet( fname, "Please fill First Name in letters only")){
		  if(lengthRestriction(fname, 2, 20,"for your first name")){
			  if(isAlphabet( mname, "Please fill First Name in letters only")){
		  if(lengthRestriction(mname, 2, 20,"for your first name")){
	
		if(isAlphabet(lname, "please fill Last Name in letters only")){  
	if(lengthRestriction(lname, 2, 15,"for your last name")){
 if(madeSelection(sex,"please choose sex")){

		
		
			 
			  

		
	
			 return true;
}}} }}} }}}
	return false;
	
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


</script>
</head>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>
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
  
   <li><a href="createinstructor.php">Create Account</a>
     <!-- <ul>
	        
		<li><a href="createdean.php">&nbsp;Dean and Registrar</a>
		<li><a href="createinstructor.php">&nbsp;&nbsp;Instructor</a>
	 </ul>-->
	</li>
	
	

	  <li><a href="#">View Account</a>
      <ul>
	        
		<!--<li><a href="viewdean.php">&nbsp; Dean & registrar</a></li>-->
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
  DBTEVTC E-Learning</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one"><br><br>
<form action="createinstructor.php" method="post" onSubmit="return check()">
<fieldset>
<legend align="center"> create account for new instructor</legend><br>
Instructor_ID &nbsp;<span id="sprytextfield1">
<input type="text" name="instructorid" id="insid">
<span class="textfieldRequiredMsg">A value is required.</span></span><br><br>
First Name&nbsp;&nbsp;&nbsp; &nbsp;
<input type="text" name="fname" id="fname"><br><br>
Midle Name&nbsp;&nbsp; &nbsp;&nbsp;
<input type="text" name="mname" id="mname"><br><br>
Last Name&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" id="lname"><br><br>
Sex&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sex" id="sex"><option selected>..select..</option>
<option>Male</option><option>Female</option></select><br><br>

Acc_Type&nbsp;<select name="actype" id="acctype"><option selected>..select..</option><option>dean</option><option>registrar</option><option>
instructor</option></select><br><br>
<?php
 //include('connection.php');
$result_set = mysqli_query($conn,"SELECT *FROM department");
 echo '<label>Department&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>';
 echo '<select id="dept" name="department">';
echo '<option  selected>..select..</option>';
while ($row = mysqli_fetch_array($result_set)) 
{

$department = $row['departmentname']; 
$departmentid = $row['departmentid'];

echo "<option value='$departmentid'>$department</option>";
}

echo '</select>';
?>


<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="create" name="create" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="cancel" name="cancel" ><br>
<?php

	
if(isset($_POST['create']))
{

$instructorid=$_POST['instructorid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$utype=$_POST['actype'];
$departmentid=$_POST['department'];
//$pass=$_POST['pass'];
$pass=$instructorid;
$password=md5($pass);

$stat='on';

$reg=mysqli_query($conn,"insert into instructor  values('$instructorid','$fname','$mname','$lname','$sex','$departmentid','$stat')");
$re=mysqli_query($conn,"insert into account  values('','$instructorid','','$fname','$password','$utype')");
if($reg){
	
echo "successfully created !!";
 echo'<meta content="3;createinstructor.php" http-equiv="refresh"/>';
}
			else
			{
			echo" primary key duplication or something wrong";
			echo'<meta content="3;createinstructor.php" http-equiv="refresh"/>';
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
<a href="viewdepartment1.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Department</font></a><br>
<a href="http://www.dbu.edu.et"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * DMCTE webSite </font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
</script>
</body>
</html>
