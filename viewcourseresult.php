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
			

			//mag show sang information sang user nga nag login
			$user_id=$_SESSION['studentid'];
		/*
			$result=mysql_query("select * from student where studentid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
            $studentid=$row['studentid'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$sex=$row['sex'];
			$age=$row['age'];
			$department=$row['department'];
			$username=$row['username'];
			$password=$row['password'];*/
			$result=mysqli_query($conn, "select * from student s, account a where s.studentid='$user_id' and s.studentid=a.studentid")or die(mysqli_error);
			$row=mysqli_fetch_array($result);
            $studentid=$row['studentid'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$sex=$row['sex'];
			$age=$row['age'];
			$department=$row['departmentid'];
			$username=$row['username'];
			$password=$row['password'];
			?>
			

<html>

<head>
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
<!--
.style2 {font-size: 16px}
-->
</style>
<script type="text/javascript">
function check()
{   
      var ccode = document.getElementById('ccode');
		 if( isAlphanumeric( ccode, "Please fill coursecode")){
		 if(lengthRestriction(ccode, 4, 8,"for course code")){
			
			  
			 return true;
 }} 
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
  DBTEVTC E-Learning</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">


<br><br>

<form action="viewcourseresult.php" method="post" name="upload"enctype="multipart/form-data" onSubmit="return check()">
<center>Select Course Name To See Your Result</CENTER><BR>
<?php
 //include('connection.php');
$result_set = mysqli_query ($conn, "SELECT * FROM coursestudent where studentid='$studentid'");
 echo '<label>Course Name

 </label>';
 echo '<select id="coursename" name="coursecode">';
echo '<option  selected>..select..</option>';
while ($row = mysqli_fetch_array($result_set)) 
{


$code = $row['coursecode'];
$sq=mysqli_query($conn, "select * from course where coursecode='$code'");
$col=mysqli_fetch_array($sq);
$coursename = $col['coursename']; 
echo "<option value='$code'>$coursename</option>";
}

echo '</select>';
echo'<br>';
echo'<br>';?>
<input type='submit' value='view' name='view' id="view"/>&nbsp;&nbsp;&nbsp;


<?php
if(isset($_POST['view']))
{
	 $coursecode =$_POST['coursecode'];
    $query = "SELECT * FROM result WHERE 	studentid= '{$studentid}'AND coursecode= '{$coursecode}'  ";
   $result_set=mysqli_query($conn, $query);
if(!$result_set)
	{
die("query is failed".mysqli_error());
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>student id</th>
<th bgcolor='#336699'><font color='white' size='2'>course code</th>
<th bgcolor='#336699'><font color=white size='2'>Quizz</th>
<th bgcolor='#336699'><font color=white size='2'>Test</th>
<th bgcolor='#336699'><font color=white size='2'>individual Assi</th>
<th bgcolor='#336699'><font color=white size='2'>Group Ass</th>
<th bgcolor='#336699'><font color=white size='2'>Final</th>
<th bgcolor='#336699'><font color=white size='2'>Total</th>
<th bgcolor='#336699'><font color=white size='2'>Grade</th>
</tr>";
while($row=mysqli_fetch_array($result_set))
{
echo"<tr>";
echo"<td>";echo $row["studentid"]; echo"</td>";
echo"<td>";echo $row["coursecode"]; echo"</td>";
echo"<td>";echo $row["quizz"]; echo"</td>";
echo"<td>";echo $row["test"]; echo"</td>";
echo"<td>";echo $row["individualassignment"]; echo"</td>";
echo"<td>";echo $row["groupassignment"]; echo"</td>";
echo"<td>";echo $row["final"]; echo"</td>";
echo"<td>";echo $row["total"]; echo"</td>";
echo"<td>";echo $row["grade"]; echo"</td>";
echo"</tr>";
}
echo "</table>";

}
else
{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">Result not found !!</font>'; 
  
   echo '</center>';
   }
}
?>


	
	
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
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE E-learning system. All rights reserved.</td>
</tr>

</table></body>
</html>