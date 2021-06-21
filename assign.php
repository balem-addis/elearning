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
.one form fieldset legend {
	font-family: Georgia, Times New Roman, Times, serif;
}
.one form fieldset legend {
	font-family: "Times New Roman", Times, serif;
}
.one form fieldset legend {
	font-weight: bold;
}
.one form fieldset legend {
	font-style: italic;
}
.one form fieldset {
	font-weight: bold;
	font-style: italic;
	font-size: 16px;
}
</style>
<script type='text/javascript'>
function check()
{


        var insid = document.getElementById('instructorname');
      var ccode = document.getElementById('coursename');
	  var dept = document.getElementById('department');
	   var year = document.getElementById('year');
	  var sem=document.getElementById('sem');
	var sec = document.getElementById('sec');
	
		
	 

		
		
			  if(madeSelection(insid,"please choose Instructor Name")){	
			  if(madeSelection(ccode,"please choose course name")){
			  if(madeSelection(dept,"please choose department")){
				   if(madeSelection(year,"please select year")){
					    if(madeSelection(sem,"please select semister")){
							 if(madeSelection(sec,"please choose section")){
			 return true;

						}}} }}} 
	return false;
	
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
<tr>tr>
<td  border="0"align="center"><img src="images/header.png" width="600" height="50"></td>

<td  border="0"align="center"></td>

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
      <!--<ul>
	        
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
  DMCTE E-Learning</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">

<form action="assign.php" method="post" name="assign" onSubmit="return check()">&nbsp;&nbsp;<br><br>
<fieldset><legend align="center"> Assign instructor</legend><br>
<?php
 //include('connection.php');
$result = mysql_query ("SELECT *FROM instructor  where status='on' ORDER BY firstname");
 echo '<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 Instructor Name&nbsp&nbsp</label>';
 echo '<select id="instructorname" name="instructorname">';
echo '<option selected>..select..</option>';
while ($row = mysql_fetch_array($result)) 
{

$vaa = $row['firstname'].' '.$row['midlename'].' '.$row['lastname']; 
$id = $row['instructorid'];
echo "<option value='$id'>$vaa</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';?>
<?php
 //include('connection.php');
$result_set = mysql_query ("SELECT *FROM course");
 echo '<label>Course Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

 </label>';
 echo '<select id="coursename" name="coursename">';
echo '<option  selected>..select..</option>';
while ($row = mysql_fetch_array($result_set)) 
{

$coursename = $row['coursename']; 
$code = $row['coursecode'];
echo "<option value='$code'>$coursename</option>";
}

echo '</select>';
echo'<br>';
echo'<br>';?>

<center>
<input type="submit" value="assign" name="assign"></center>


<?php
if(isset($_POST['assign']))
{
//include("connection.php");  
$instructorname=$_POST['instructorname'];
$ccode=$_POST['coursename'];

$reg=mysql_query("insert into courseinstructor  values('','$instructorname','$ccode')");
if($reg)
	{
	
echo "successfully assigned !!";
echo'<meta content="3;assign.php" http-equiv="refresh"/>';
}
			else
			{
			echo"faild";
			echo'<meta content="3;assign.php" http-equiv="refresh"/>';
			}}
			

//mysql_close($conn);



?>

</fieldset>
</form></td>
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

</table></body>
</html>
