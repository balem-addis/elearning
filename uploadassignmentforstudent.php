<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['studentid']))
 {
  $user_id=$_SESSION['studentid'];
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
			$user_id=$_SESSION['studentid'];

			$result=mysqli_query($conn, "select * from student where studentid='$user_id'")or die(mysql_error);
			$row=mysqli_fetch_array($result);
            $studentid=$row['studentid'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$sex=$row['sex'];
			$age=$row['age'];
				//$department=$row['department'];
			//$username=$row['username'];
			//$password=$row['password'];
			?>
			


<html>
<head>
<link style="text/css" href="1.css" rel="stylesheet">
<script type="text/javascript">
function check()
{
 if (document.myform.elements["filefield"].value == "")
          {
             alert("please select file!");
             document.myform.elements["filefield"].focus();
             return false;  
         }

      var ccode = document.getElementById('ccode');
	  var number = document.getElementById('number');
	 if(isAlphanumeric(ccode,"please fill course code")){
		 
	 	 if(isNumeric(number,"please fill assignment number")){
	 

	   
		
		
			  
			  if(madeSelection(assignment,"please choose assignmenttype"))
			  {
			 
			 return true;

	 }}}
						
	return false;
	
	
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



function madeSelection(elem, helperMsg)
{
	if(elem.value =="..select..")
	{
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
	
}
</script>
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

<?php
			
			if(isset($_POST['upload']))
{

	$number=$_POST['number'];

$result=mysql_query("SELECT * from assignment where assignmentnumber='{$number}' ");
$num = mysql_num_rows($result);
$row=mysql_fetch_array($result);
$coursecode=$row['coursecode'];
$assignmenttype=$row['assignmenttype'];

$res=mysql_query("select * from assignment where number='{$number}' AND assignmenttype='{$assignmenttype}' AND 
studentid='{$studentid}' AND coursecode='{$coursecode}'");
	$ro=mysql_fetch_array($res);
	if(mysql_num_rows($res)==1)
	{
		echo "<script> alert('you have already uploaded your assignmnet before!!!!')</script>";
	 echo'<meta content="3;uploadassignmentforstudent.php" http-equiv="refresh"/>';
		
		
	}
else{
   if($num==0 && $number!="")
	   {
	   echo "<script> alert('this assignment number is not allocated for any assignment!!!!')</script>";
  echo "<script>window.location='uploadassignmentforstudent.php';</script>";
  }
 
  else{

$todays_date1 = date("Y-m-d");
$todays_date=strtotime($todays_date1);
$deadlinedate1=$row['deadlinedate'];
$deadlinedate=strtotime($deadlinedate1);
	  
	   if($deadlinedate < $todays_date)
  {
	  
 echo "<script> alert('sorry dear student the deadline date of this assignment was passed!!!!!')</script>";
  echo "<script>window.location='uploadassignmentforstudent.php';</script>";
  }
  

  
			
			
 
else
{
	  
	//$assignmenttype=$_POST['assignmenttype'];

	foreach($_FILES['files']['tmp_name'] as $key => $name_tmp)
	{
		$name=$_FILES['files']['name'][$key];
		$tmpnm=$_FILES['files']['tmp_name'][$key];
		$type=$_FILES['files']['type'][$key];
		$size=$_FILES['files']['size'][$key];
		if($size>5000000)
{
	//
echo "<script> alert('please compress the file it is out of range!!')</script>";
	
}
		else{
		
		$dir="module\\" . $_FILES["file"]["name"];
			
			
		$mov=move_uploaded_file($tmpnm,$dir.$name);
		

		if($mov)
		{
			$res=mysql_query("insert into assignment values('','$number','$studentid','','$coursecode','$assignmenttype',
			'$name','$type','$size',now(),'',now())");
			if($res)
			{
				echo "<script> alert('uploaded successfully!!')</script>";
				echo "<script>window.location='uploadassignmentforstudent.php';</script>";
			}
			else
			{
			echo "<script> alert('something wrong')</script>";
			echo "<script>window.location='uploadassignmentforstudent.php';</script>";
			}}
			else
				{
				 echo "<script> alert('file not found')</script>";
			}
			
	}
}}}}}
			
			?>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>

</tr></table>

<table border="0" width="1300"height="40" align="center" bgcolor=#778899 >
<tr>
<td align="center" valign="bottom"><b>
<a href="student.php" class="a">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="downloadcoursematerial.php"class="a">Download course Material</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="uploadassignmentforstudent.php"class="a">Upload Assignment </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=" downloadassignmentforstudent.php"class="a">Download Assignment</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="viewcourseresult.php"class="a">View course Result</a>
</td>
<td bgcolor="white"><?php echo"Hi";echo"&nbsp";echo $firstname;?></td>
<td align="right" border="0"><a href="logout.php"class="a">Logout</a></td></tr></b>
</table>
<br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><br>

<form action="uploadassignmentforstudent.php" method="post" name="myform" enctype="multipart/form-data" onSubmit="return check()"><br><br>
<fieldset><legend ><span class="q"> upload assignment for Teacher</span></legend>
  <span class="q"><br>
  Ass_Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="number"name="number"  size="20%"onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File Name:   
  </span>
  <input type="file" name="files[]" id="filefield" /> <br>
<br>
<input type='submit' value='Upload' name='upload' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' value='Cancel'/>



</fieldset>
</form>

</td>




<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="viewprofileforstudent.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Profile</font></a><br>
<a href="changepassword1.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * Change Password</font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>