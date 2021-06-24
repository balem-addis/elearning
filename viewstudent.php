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
<td  border="0"align="center"><img src="images/HEAD.png" width="600" height="50"></td>
</tr></table>

<table border="0" width="1300"height="40" align="center" bgcolor=#778899 >
<tr>
<td align="center" valign="bottom" bgcolor=#778899><b><a href="registrar.php"class="a">Home</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registerstudent.php"class="a">Register Student</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registercourse.php"class="a">Curiculum Registration</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="department.php"class="a">Department</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td align="right" border="0"><a href="logout.php"class="a">Logout</a></td></tr>
</table><br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
BTVTC ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><br>


<center><font family="anduls"size="+3" color="blue"> Here is List of student in your college!</font></center> 
<?php
if(isset($_POST['view']))
{
$dept=$_POST['departmentname'];
$year=$_POST['year'];
    $result_set = mysqli_query($conn,"SELECT * FROM student where departmentid='{$dept}' and year='{$year}'");
if(!$result_set)
	{
die("query is failed".mysqli_error());
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center' valign='top'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Id Number</th>
<th bgcolor='#336699'><font color='white' size='2'>First Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Last Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Age </th>
<th bgcolor='#336699'><font color='white' size='2'>Sex</th>
<th bgcolor='#336699'><font color='white' size='2'>Department</th>
<th bgcolor='#336699'><font color='white' size='2'>Year</th>
<th bgcolor='#336699'><font color='white' size='2'>Semister</th>

</tr>";
while($row=mysqli_fetch_array($result_set))
{
	$deptid=$row["departmentid"];
	$d=mysqli_query($conn,"select * from department where departmentid='{$deptid}'");
	$col=mysqli_fetch_array($d);
echo"<tr>";
echo"<td>";echo $row["studentid"]; echo"</td>";
echo"<td>";echo $row["firstname"]; echo"</td>";
echo"<td>";echo $row["lastname"]; echo"</td>";
echo"<td>";echo $row["age"]; echo"</td>";
echo"<td>";echo $row["sex"]; echo"</td>";
echo"<td>";echo $col['departmentname'];echo"</td>";
echo"<td>";echo $row["year"]; echo"</td>";
echo"<td>";echo $row["semister"]; echo"</td>";
echo"</tr>";
}
echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">account not found !!</font>'; 
  
   echo '</center>';
}}

?>


</td>


<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="viewdepartment.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Department</font></a><br>
<a href="viewstudent.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * view Student</font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2021  BTVTC ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
