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

			$result=mysqli_query($conn,"select * from instructor where instructorid='$user_id'")or die(mysqli_error);
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
<script type="text/javascript">
function check()
{   
      var ccode = document.getElementById('ccode');
	   var insid = document.getElementById('insid');
		 if( isAlphanumeric( ccode, "Please fill coursecode")){
		 if(lengthRestriction(ccode, 4, 8,"for course code")){
			  if( isAlphanumeric( insid, "Please fill your ID")){
		 if(lengthRestriction(insid, 2, 8,"for your id")){
			  
			 return true;
 }} }}
	return false;}
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

function check1()
{   
      var assnum = document.getElementById('assnum');
		 if( isNumeric( assnum, "Please fill assignment number")){
		 if(lengthRestriction(assnum, 1, 8,"for assignment number")){
			
			  
			 return true;
 }} 
	return false;}
	
	
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
<a href="postcourseresult.php"class="a">Insert course Result</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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

<form action="downloadassignment.php" method="post" name="upload"enctype="multipart/form-data" onSubmit="return check()">
<fieldset> <legend align="center"> select Course Name to get Assignment No</legend><br><br>
<?php
 //include('connection.php');
$result = mysql_query ("SELECT * FROM courseinstructor where 	instructorid='{$instructorid}'");
 echo '<label>Select course Name:</label>';
 echo '<select id="ccode" name="coursename">';
echo '<option selected>..select..</option>';
while ($row = mysqli_fetch_array($result)) 
{

$ccode=$row['coursecode'];
$sql=mysqli_query($conn,"select * from course where coursecode='{$ccode}'");
$col=mysqli_fetch_array($sql);
$cname = $col['coursename']; 
echo "<option value='$ccode'>$cname</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';
echo'<br>';
?>
<br><br>
<center><input type='submit' value='view' name='view' ></center><br></fieldset>
</form>

<form action="downloadassignment.php" method="post" name="upload"enctype="multipart/form-data" onSubmit="return check1()">
<center> <h3><font color=3333ff>Enter assignment number</font></h3></center>
Ass_Number&nbsp;&nbsp;<input type="text" id="assnum" name="assnum"size="20%"><br><br>
<center><input type='submit' value='search' name='download' ></center><br> </form>
			
<?php
		
if(isset($_POST['view']))
{
   $coursecode =$_POST['coursename'];
  
      $result_set = mysqli_query($conn,"SELECT * FROM assignment WHERE coursecode= '{$coursecode}' AND instructorid='{$instructorid}'  ");
  


if(!$result_set)
	    {
echo"something wrong pls check again!!";
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Ass_Number</th>
<th bgcolor='#336699'><font color='white' size='2'>Your ID</th>
<th bgcolor='#336699'><font color='white' size='2'>course code</th>
<th bgcolor='#336699'><font color='white' size='2'>ass_type</th>
<th bgcolor='#336699'><font color=white size='2'>File Name</th>

</tr>";
while($row=mysqli_fetch_array($result_set))
{
echo"<tr >";
$files=$row['filename'];
echo"<td>";echo $row["assignmentnumber"]; echo"</td>";
echo"<td>";echo $row["instructorid"]; echo"</td>";
echo"<td>";echo $row["coursecode"]; echo"</td>";
echo"<td>";echo $row["assignmenttype"]; echo"</td>";
echo"<td>";echo $row["filename"]; echo"</td>";
echo"<td>"; echo $row['filename']; echo "</td>";
echo"</tr>";
}
echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">check again something wrong !!</font>'; 
  
   echo '</center>';
   }
}
if(isset($_POST['download']))
 {
	 $assnum=$_POST['assnum'];
	  $result_set = mysqli_query($conn,"SELECT * FROM assignment WHERE 	number= '{$assnum}'  ");
 
if(!$result_set)
	{
echo"something wrong plas check again!!";
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Ass_Number</th>
<th bgcolor='#336699'><font color='white' size='2'>studentID</th>
<th bgcolor='#336699'><font color='white' size='2'>course code</th>
<th bgcolor='#336699'><font color='white' size='2'>ass_type</th>
<th bgcolor='#336699'><font color=white size='2'>File Name</th>
<th bgcolor='#336699'><font color=white size='2'>submitted Date</th>
</tr>";
while($row=mysqli_fetch_array($result_set))
{
echo"<tr>";
$files=$row['filename'];
echo"<td>";echo $row["number"]; echo"</td>";
echo"<td>";echo $row["studentid"]; echo"</td>";
echo"<td>";echo $row["coursecode"]; echo"</td>";
echo"<td>";echo $row["assignmenttype"]; echo"</td>";
echo"<td>";echo $row["filename"]; echo"</td>";
echo"<td>";echo $row["submissiondate"]; echo"</td>";

echo"<td>";?><?php echo"<a href='module/$files'>Download</a>";?><?php echo "</td>";
echo"</tr>";
}
echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">file not found !!</font>'; 
  
   echo '</center>';
   }
}
	 
	 ?>
	 

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