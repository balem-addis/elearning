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

			$result=mysql_query("select * from account where accountid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
            $accountid=$row['accountid'];
			$firstname=$row['firstname'];
			$midlename=$row['midlename'];
			$lastname=$row['lastname'];
			//$username=$row['username'];
			//$password=$row['password'];
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
DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one"><br><br>
<form action="viewcourseinstructor.php" method="post">

<?php
mysql_connect("localhost","root","");
mysql_select_db("e-learning");
 if(isset($_POST['view']))
 {
  $deptid =$_POST['departmentname'];
    $result_set =mysql_query( "SELECT * FROM course where departmentid='{$deptid}'  ") ;

$c=mysql_fetch_array($result_set);
$coursecode=$c['coursecode'];
$ci=mysql_query("select * from courseinstructor where coursecode='$coursecode'");
if(mysql_num_rows($ci)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>courseIns_ID</th>
<th bgcolor='#336699'><font color='white' size='2'>Instructor Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Course Name</th>
<th bgcolor='#336699'><font color='white' size='2'>course code</th>
<th bgcolor='#336699'><font color='white' size='2'>department Name</th>
<th bgcolor='#336699'><font color='white' size='2'>year</th>
<th bgcolor='#336699'><font color=white size='2'>semister</th>
<th bgcolor='#336699'><font color=white size='2'>section</th>

</tr>";

while($row=mysql_fetch_array($ci))
{
	
	$code=$row["coursecode"];
	$cname=$c['coursename'];
	$insid= $row["instructorid"];
	$ins=mysql_query("select * from instructor where instructorid='{$insid}'");
	$row1=mysql_fetch_array($ins);
	$departmentid=$row['departmentid'];
	$dept=mysql_query("select * from department where departmentid='{$departmentid}'");
	$row3=mysql_fetch_array($dept);
echo"<tr>";
echo"<td>";echo $row["courseinstructorid"]; echo"</td>";
echo"<td>"; echo $row1["firstname"].' '.$row1['midlename'];echo"</td>";
echo"<td>";echo $row2["coursename"]; echo"</td>";
echo"<td>";echo $row["coursecode"]; echo"</td>";
echo"<td>";echo $row3["departmentname"]; echo"</td>";
echo"<td>";echo $row["year"]; echo"</td>";
echo"<td>";echo $row["semister"]; echo"</td>";
echo"<td>";echo $row["section"]; echo"</td>";




echo"</tr>";
}
echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red"> not found !!</font>'; 
  
   echo '</center>';
   }
 }
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
<a href="http://www.DMCTE.edu.et"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * DMCTE webSite </font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
