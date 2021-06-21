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
	        
		<li><a href="createdean.php">&nbsp;Ac_Dean and Registrar</a>
		<li><a href="createinstructor.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="createregistrar.php">&nbsp;&nbsp;Registrar Officer</a></li>
		

	  </ul>
	</li>
	
	
	<li><a href="#">Delete Account</a>
      <ul>
	      
		<li><a href="deletedean.php">&nbsp;Acadamic Dean</a>
		<li><a href="deleteinstructor.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="deleteregistrar.php">&nbsp;&nbsp;Registrar Officer</a></li>
		

	  </ul></li>
	  <li><a href="#">View Account</a>
      <ul>
	        
		<li><a href="viewdean.php">&nbsp;Acadamic Dean</a></li>
		<li><a href="viewinstructor.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="viewregistrar.php">&nbsp;&nbsp;Registrar Officer</a></li>
		

	  </ul>
	</li>
	<li>
	<font size="4px"><a href="logout.php" id="logout" align="right">Logout</a></font></li>
</div>
</td>
</tr>
</table>
<table border="1"  width="1210"height="450" bgcolor=ffffff>
<tr><td valign="center" align="center" bgcolor=#669999><font  color="white" ><b><br><br>DMCTE E-Learning </font></b><BR>
<img src="images/elearning7.png"  width="250" height="150"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" class="one"><br><br>
<form action="viewregistrar.php" method="post">
<center> press the button to view account of Registrar officer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="view" name="view" ></center>

<?php
mysql_connect("localhost","root","");
mysql_select_db("e-learning");
 if(isset($_POST['view']))
 {
  // $acid =$_POST['acid'];
    $query = "SELECT * FROM account   ";
   $result_set=mysqli_query($conn,$query);
if(!$result_set)
	{
die("query is failed".mysqli_error());
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>account id</th>
<th bgcolor='#336699'><font color='white' size='2'>user Name</th>
<th bgcolor='#336699'><font color=white size='2'>password</th>
<th bgcolor='#336699'><font color=white size='2'>account type</th>

</tr>";
while($row=mysqli_fetch_array($result_set))
{
echo"<tr>";
echo"<td>";echo $row["acc_id"]; echo"</td>";
echo"<td>";echo $row["username"]; echo"</td>";
echo"<td>";echo $row["password"]; echo"</td>";
echo"<td>";echo $row["acc_type"]; echo"</td>";


echo"</tr>";
}
echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">account not found !!</font>'; 
  
   echo '</center>';
   }
}
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
<a href="http://www.DMCTE.edu.et"class="b" >  <font size="5"  color="white">&nbsp;&nbsp;&nbsp;* DMCTE website</a><br></font>
<a href="site.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="white">* Site map</a><br></font>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="white"> * gmail</a></td>
</font>
</tr>
</table>
</td>
</tr>
<tr><td align="center" colspan=5 bgcolor=#669999 border="0" width="25" >Copyright © 2018 DMCTE ELMS. All rights reserved.</td></tr>

</table></body>
</html>
