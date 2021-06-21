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

			/*$result=mysql_query("select * from student where studentid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
            $studentid=$row['studentid'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$sex=$row['sex'];
			$age=$row['age'];
			$department=$row['departmentid'];
			$username=$row['username'];
			$password=$row['password'];*/
			$result=mysql_query("select * from student s, account a where s.studentid='$user_id' and a.studentid=s.studentid")or die(mysql_error);
			$row=mysql_fetch_array($result);
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
DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><br>

<center><font family="anduls"size="+3" color="blue"> Here is Your Personal Information!</font></center> 
<?php 

echo '<table border="0" class=""> <tr border="0"><td border="0"><font color="blue" size="+2">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;</font></td>';echo"<td border=0>";echo'<font color="blue" size="+2">';echo $firstname; echo'</font>';echo"</td>";echo"</tr>";echo"<br>";?>

<td><font color="blue" size="+2">Last Name</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $lastname; echo'</font>';echo"</td>";echo"</tr>";?>
<td><font color="blue" size="+2">ID_Number</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $studentid; echo'</font>';echo"</td>";echo"</tr>";?>
<td><font color="blue" size="+2">Sex</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $sex; echo'</font>';echo"</td>";echo"</tr>";?>
<td><font color="blue" size="+2">Age</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $age; echo'</font>';echo"</td>";echo"</tr>";?>
<td><font color="blue" size="+2">Department</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $department; echo'</font>';echo"</td>";echo"</tr>";?>

<td><font color="blue" size="+2">User Name</font></td><?php echo"<td>";echo'<font color="blue" size="+2">';echo $username;echo'</font>'; echo"</td>";echo"</tr>";?>
<td><font color="blue" size="+2">Password</td> <?php echo"</tr>";
echo "</table>";

?>
  



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
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright ©2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>