<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['instructorid']))
 {
  $user_id=$_SESSION['instructorid'];
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
			$user_id=$_SESSION['instructorid'];

			$result=mysqli_query($conn, "select * from instructor where instructorid='$user_id'")or die(mysqli_error);
			$row=mysqli_fetch_array($result);
            $instructorid=$row['instructorid'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$sex=$row['sex'];
			//$username=$row['username'];
			//$password=$row['password'];
			?>
			


<html>
<head>
<link style="text/css" href="1.css" rel="stylesheet">
<script type='text/javascript'>
function check()
{


        var sid = document.getElementById('sid');
      var ccode = document.getElementById('ccode');
	  var quizz = document.getElementById('quizz');
	var test = document.getElementById('test');
	var indiv = document.getElementById('indiv');
	var group = document.getElementById('group');
	var finalex = document.getElementById('finalex');
		
	
if(madeSelection(sid,"please select Student name")){
	
		if(madeSelection(ccode,"please select coursename")){

		if(isNumeric(quizz, "please fill  quizz")){
	if(quizzRestriction(quizz)){
		if(lengthRestriction(quizz, 1, 2,"enter correct value for quizz")){
			if(isNumeric(test, "please fill test")){
	if(testRestriction(test)){
		if(lengthRestriction(test, 1, 2,"enter correct value for test")){
		if(isNumeric(indiv, "please fill individual assignment")){
	if(indivRestriction(indiv)){
		if(lengthRestriction(indiv, 1, 2,"enter valid individual assignment")){
		if(isNumeric(group, "please fill group assignment")){
	if(groupRestriction(group)){
		if(lengthRestriction(group, 1, 2,"enter group assignment")){
		if(isNumeric(finalex, "please fill final exam")){
	if(finalexRestriction(finalex)){
		if(lengthRestriction(finalex, 1, 2,"enter valid finalexam")){
		
		
		
			 return true;
}
						}}} }}} }}} }}
					}}}}
		}
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


function finalexRestriction(elem){
    	if(elem.value<0 ||elem.value>50)
	{
	alert("enter valid final exam result");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function quizzRestriction(elem){
    	if(elem.value<0 ||elem.value>10)
	{
	alert("enter valid quizz result");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function testRestriction(elem){
    	if(elem.value<0 ||elem.value>20)
	{
	alert("enter valid test result");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function indivRestriction(elem){
    	if(elem.value<0 ||elem.value>10)
	{
	alert("enter valid individual result");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function groupRestriction(elem){
    	if(elem.value<0 ||elem.value>10)
	{
	alert("enter valid group assignment result");
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
function madeSelection(elem, helperMsg){
	if(elem.value =="..select.."){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;}
		
	}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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

<td align="center" valign="bottom" class="a"><b><a href="instructor.php"class="a">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="uploadcoursematerial.php"class="a">Upload course Material</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="uploadassignment.php"class="a">Upload Assignment </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=" downloadassignment.php"class="a">Download Assignment</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="postcourseresult.php"class="a">Post course Result</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
<td><?php echo'Hi';echo '&nbsp'; echo $firstname;?></td>
<td align="right" border="0"><a href="logout.php"class="a">Logout</a></td></tr></b>
</table>
<br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><br>

<form action="postcourseresult.php" method="post" name="upload"enctype="multipart/form-data" onSubmit="return check()">
<fieldset>
  <em><strong>
  <legend align="center">Post students result</legend>
  <br><br>
<?php
 //include('connection.php');
$result = mysqli_query($conn, "SELECT * FROM courseinstructor where 	instructorid='{$instructorid}'");
 echo '<label>Select course Name:</label>';
 echo '<select id="ccode" name="coursename">';
echo '<option selected>..select..</option>';
while ($row = mysqli_fetch_array($result)) 
{

$ccode=$row['coursecode'];
$sql=mysqli_query($conn, "select * from course where coursecode='{$ccode}'");
$col=mysqli_fetch_array($sql);
$cname = $col['coursename']; 
echo "<option value='$ccode'>$cname</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';?>
<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='view' name='view' id="view">  </center>
<br>
<?php
if(isset($_POST['view']))
{
$coursecode=$_POST['coursename'];
$result = mysqli_query($conn, "SELECT * FROM coursestudent where 	coursecode='{$coursecode}'");
if(mysqli_num_rows($result)>0)
{
 echo '<label>Select Student Name:</label>';
 echo '<select id="sid" name="studentname">';
echo '<option selected>..select..</option>';
while ($row = mysqli_fetch_array($result)) 
{
	$sid=$row['studentid'];
$std=mysqli_query($conn, "select * from student where studentid='{$sid}'");
$col=mysqli_fetch_array($std);
$stdname=$col['firstname'].' '.$col['lastname'];
echo "<option value='$sid'>$stdname</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';

?>
quizz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp; 
  <input type="text" id="quizz" size="20%"name="quizz" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
Test&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="test" size="20%"name="test" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
Indiv Assignment &nbsp; 
 <input type="text" id="indiv" size="20%"name="indiv" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
Group Assignment&nbsp;
<input type="text" id="group" size="20%"name="group" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
Final Exam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;       
<input type="text" id="finalex" size="20%"name="finalexam" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='Post' name='post' id="post">  <br>

<?php }
else
	echo"there is no student who take this course";
}
?>
<?php

if(isset($_POST['post']))
{
	 
	$studentid=$_POST['studentname'];
	

	$coursecode=$_POST['coursename'];	
	$res=mysqli_query($conn, "select * from result where studentid='{$studentid}' AND coursecode='{$coursecode}'");
	$row=mysqli_fetch_array($res);
	if(mysqli_num_rows($res)==1)
	{
		echo"sorry the result of this student is already posted before!";
		
		
	}
	else
	{
	$quizz=$_POST['quizz'];	
	$test=$_POST['test'];	
	$individual=$_POST['indiv'];	
	$group=$_POST['group'];	
	$final=$_POST['finalexam'];	
	$total=$quizz+$test+$individual+$group+$final;
	if($total>=85)
	{
	$grade="A";
	}
	else if($total>=70)
	{
	$grade="B";
	}
	else if($total>=50)
	{
	$grade="C";
	}
	else if($total>=40)
	{
	$grade="D";
	}
	else if($total<40)
	{
	$grade="F";
	}
	
	$res=mysqli_query($conn, "insert into result values('',$instructorid,'$studentid','$coursecode','$quizz','$test',
	'$individual','$group','$final','$total','$grade')");
	
			echo"sucessfully posted";
			
				
}}
	
	//mysql_close($conn);
	?>
    
    </strong></em>
</fieldset>
</form>
</td>

<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="viewprofileforinstructor.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Profile</font></a><br>
<a href="changepassword.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * Change Password</font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright \A9 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
