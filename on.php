

<?php
			//include('connection.php');
			//session_start();

			//mag show sang information sang user nga nag login
			//$user_id=$_SESSION['accountid'];

			//$result=mysql_query("select * from account where accountid='{$user_id}'");
//$row=mysql_fetch_array($result);			
			//$acountid=$row['accountid'];
			//$acounttype=$row['accounttype'];
			//$username=$row['username'];
			//$password=$row['password'];
			//?>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="1.css" rel="stylesheet">
<style type="text/css">
.one form center {
	font-size: 14px;
}
.one form center {
	font-family: Arial, Helvetica, sans-serif;
}
.one form center {
	font-style: italic;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
</style>
</head>
<body bgcolor=" #666633">
<table border="0" align="center" bgcolor=#669999>
<tr><td>
<table align="center" border="0" width="1200"height="100" bgcolor=006666>
<tr>
<td  ><img src="images/elearningjpg.jpg" width="350" height="150"></td>
<td "><img src="images/elearning.jpg" width="850" height="150"></td>
</tr></table>
<table border="0" width="1210"height="50" bgcolor=#778899 >
<tr align="center" >
<td bgcolor=#778899 align="center" valign="bottom">
  <div id="dropdown">
    <li>
   <a href="dean.php">Home</a></li>
   <li>
   <a href="assign.php">Assign Instructor</a></li>
   <li><a href="#">Create Account</a>
      <ul>
	        
		<li><a href="createdean.php">&nbsp;Dean & Registrar</a>
		<li><a href="createinstructor.php">&nbsp;&nbsp;Instructor</a>
		

	  </ul>
	</li>
	
	

	  <li><a href="#">View Account</a>
      <ul>
	        
		<li><a href="viewdean.php">&nbsp;Acadamic Dean</a></li>
		<li><a href="viewinstructor.php">&nbsp;&nbsp;Active Instructor</a></li>
		<li><a href="inactiveinstructor.php">&nbsp;&nbsp;Inactive Instructor</a></li>
		
		<li><a href="viewcourse.php">&nbsp;courses</a></li>
		<li><a href="viewcourseinstructor.php">&nbsp;courseinstructor</a></li>
		
		

	  </ul>
	</li>
	<li>
	<font size="4px"><a href="logout.php" id="logout" align="right">Logout</a></font></li>
</div>
</td>
</tr>
</table>
<table border="1"  width="1210"height="450" bgcolor=ffffff>
<tr><td valign="center" align="center" bgcolor=#669999><font  color="white" ><b><br><br>BTVTC ELMS </font></b><BR>
<img src="images/elearning7.png"  width="250" height="150"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" class="one"><br><br>
<form action="inactiveinstructor.php" method="post">


<?php
include('connection.php');

$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("e-learning",$conn);
$id = $_REQUEST['id'];
   mysql_query("DELETE FROM drug WHERE drugid='$id' ");
   header('Location: expired.php');

mysql_close($conn);
?>

</fieldset>
</form>
</td>
<td rowspan=4 width="300" bgcolor=#669999>
<!-- <marquee direction="up">
<img src="images/1.jpg" height="300" width="300"> -->
<marquee direction="up"><img src="images/2.jpg" height="300" width="300"></marquee>
<!-- <img src="images/3.jpg"height="300" width="300"></marquee>
<marquee direction="up"><img src="images/4.jpg"height="300" width="300"></marquee>
<marquee direction="up"><img src="images/5.jpg"height="300" width="300"></marquee>
<marquee direction="up"><img src="images/6.jpg"height="300" width="300"></marquee>
<marquee direction="up"><img src="images/7.jpg"height="300" width="300"></marquee>
<marquee direction="up"><img src="images/8.jpg"height="300" width="300"> -->
</marquee></td></tr>


<tr>
<td  bgcolor=#669999  valign="top" rowspan=3><font  color="white" ><center><b><h3>Related Links</h3></b></center></font>
<a href="viewdepartment1.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="4.5"  color="white">* View Department</a><br></font>
<a href="http://www.BTVTC.edu.et"class="b" >  <font size="5"  color="white">&nbsp;&nbsp;&nbsp;* BTVTC website</a><br></font>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="white"> * gmail</a></td>
</font>
</tr>
</table>
</td>
</tr>
<tr><td align="center" colspan=5 bgcolor=#669999 border="0" width="25" >Copyright © 2021 BTVTC ELMS. All rights reserved.</td></tr>

</table></body>
</html>
