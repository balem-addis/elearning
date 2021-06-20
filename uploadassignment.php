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

			$result=mysql_query("select * from instructor where instructorid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
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
<script type="text/javascript">
function check()
{


      var ccode = document.getElementById('cname');
	  var atype = document.getElementById('assignment');
	 
	 

	    if (document.myform.elements["filefield"].value == "")
          {
             alert("please select file!");
             document.myform.elements["filefield"].focus();
             return false;  
         }
		 
		
		
			  
			  if(madeSelection(ccode,"please choose course name"))
			  {
			  if(madeSelection(atype,"please choose assignmenttype"))
			  {
			 return true;
			  }
						}
	return false;
	
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

<form action="uploadassignment.php" method="post" name="myform"enctype="multipart/form-data" onSubmit="return check()">
<fieldset> <legend align="center" valign="top"> upload Assignment</legend><br>

<?php
 //include('connection.php');
$result = mysql_query ("SELECT * FROM courseinstructor where 	instructorid='{$instructorid}'");
 echo '<label>Select course Name:</label>';
 echo '<select id="ccode" name="coursename">';
echo '<option selected>..select..</option>';
while ($row = mysql_fetch_array($result)) 
{

$ccode=$row['coursecode'];
$sql=mysql_query("select * from course where coursecode='{$ccode}'");
$col=mysql_fetch_array($sql);
$cname = $col['coursename']; 
echo "<option value='$ccode'>$cname</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';
echo'<br>';
?>
Assignment Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name ="assignmenttype" id="assignment"><option selected>
..select..</option><option >Individual Assignment</option><option>Group Assignment</option></select>
<br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
File Name:
<input type="file" name="files[]" id="filefield" ><br><br>
DeadLine Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date1" id="date" ><br><br>


<input type='submit' value='Upload' name='upload' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' value='Cancel'/><br>

<?php
			
if(isset($_POST['upload']))
{ 
      $coursecode=$_POST['coursename'];
	$assignmenttype=$_POST['assignmenttype'];

	$date=$_POST['date1'];
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
$todays_date1 = date("Y-m-d");
$todays_date=strtotime($todays_date1);
$deadlinedate1=$date;
$deadlinedate=strtotime($deadlinedate1);
	  
	   if($deadlinedate <= $todays_date)
	   {
	   echo "Deadline date of this assignmnet is incorrect please check it";
				//echo "<script>window.location='uploadassignment.php';</script>";
				echo'<meta content="3;uploadassignment.php" http-equiv="refresh"/>';
	   }
else{

		$dir="module\\" . $_FILES["file"]["name"];
		$mov=move_uploaded_file($tmpnm, $dir.$name);
		if($mov)
		{
			$res=mysql_query("insert into assignment values('','','','$instructorid','$coursecode','$assignmenttype',
			'$name','$type','$size',now(),'$date','')");
			if($res)
			{
				echo'<br>';
				echo"uploaded succesfully";
				echo' <meta content="5;uploadassignment.php" http-equiv="refresh" />';
			}
			else
			{
				echo "something wrong";
				
			//echo "<script> alert('something wrong')</script>";
			echo' <meta content="5;uploadassignment.php" http-equiv="refresh" />';
			}}
			
			}
}}
			
			?>


</fieldset>
</form>

</td>
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
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
