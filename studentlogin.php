<?php   
 session_start();
include("connection.php");
?>

<html>
<head>

<link style="text/css" href="1.css" rel="stylesheet">
<script type='text/javascript'>
function  validateForm()
{


        var uname = document.getElementById('uname');
      var pass = document.getElementById('pass');
	 
	 
	
		  if(isAlphanumeric( uname, "Please fill your user Name ")){
		  if(lengthRestriction(uname, 2, 32,"for your user name")){
	
		if(isAlphanumeric(pass, "enter password")){  
	if(lengthRestriction(pass, 4, 32,"for your password")){

			 
return true;
}}}}
				
	return false;
	
}
	

function lengthRestriction(elem, min, max, helperMsg){
	var uinput = elem.value;
	if(uinput.length >= min && uinput.length <= max){
		return true;
	}
	else{
		alert("Please enter between " +min+ " and " +max+ "" +helperMsg);
		elem.focus();
		return false;
	}
}



function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

</script>

<link style="text/css" href="1.css" rel="stylesheet">
</head>


<body bgcolor=996600>
<table align="center" bgcolor=#669999 border="0">
<tr><td>
<table align="center" border="0" width="1200"height="100" bgcolor=006666 >
<tr>
<td  ><img src="images/elearningjpg.jpg" width="350" height="150"></td>
<td "><img src="images/elearning.jpg" width="838" height="150"></td>
</tr></table>
<table border="0" width="1200"height="50" bgcolor= #778899 align="center">
<tr>
<td align="center" valign="bottom" bgcolor= #778899><b>
<a href="index.php" class="a">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php"class="a">About US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=" contact.php"class="a">contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.youtube.com"class="a">Tutorials</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.youtube.com"class="a">Videos</a>
</td>
<td align="right" border="0" bgcolor= #778899><br>
<a href="login.php" class="a">Login</a></td></tr>
</table>
<table border="1"  width="1200"height="450" bgcolor=ffffff align="center">
<tr><td valign="center" align="center" bgcolor=#669999 width="210"><font  color="white" ><b><br>DMCTE E-Learning </b></font><BR>
<img src="images/elearning7.png"  width="200" height="200"></td>
<td width="650" height="300" rowspan=4 align="center"valign="top" class="one"><h1>Well come to student login page</h1>
<img src="images/login.jpg" width="650" height="100" align="top"><br>

<form name="login" action="studentlogin.php" method="post" onSubmit="return validateForm()">
<fieldset> 
<font align="center"><font size="+2" style="italic" family="algerian" color="red"> Login in for student</a></font><br><br>
User Name&nbsp;&nbsp;<input type="text" name="username" id="uname" placeholder="..enter Uname.." size="20%"><br><br>
Password&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="pass" name="password" placeholder="..enter pass.." size="20%"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Login' name='login' />&nbsp;&nbsp;&nbsp;
<input type='reset' value='Cancel'/><br><br>




<?php
 if(isset($_POST['login']))
 {
   $username =$_POST['username'];
   $password=$_POST['password'];
    $result_set = mysqli_query($conn,"SELECT * FROM student WHERE 	firstname= '{$username}' AND studentid= '{$password}' ");
	$num1 = mysqli_num_rows($result_set);
	$row = mysqli_fetch_array($result_set);
	
	if($num1 == 1)
{
	   session_start();
		$_SESSION['studentid']=$row['studentid'];
		echo "<script>window.location='student.php';</script>";

}
if($num1 < 1){
	echo 'no';
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">User Name & Password Not Match !!</font>'; 
  echo "<script>window.location='studentlogin.php';</script>";
  
   echo '</center>';
   }
}
mysql_close($conn);

?>


 
<table  align="center"><tr><td align="center">Click Here to Log-in for<br><br>
<a href="deanlogin.php" class="b"><font size="5"  >Ac_Dean</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="instructorlogin.php"class="b"><font size="5"  >Instructor</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="registrarlogin.php"class="b"><font size="5"  >Reg_OFF</font></a></td></tr></table>



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
<a href="http://www.DMCTE.edu.et"class="b" >  <font size="5"  color="white">&nbsp;&nbsp;&nbsp;* DMCTE website</a></font><br>
<a href="site.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="white">* Site map</a></font><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="white"> * gmail</a></font></td>

</tr>
</table>
</td>
</tr>
<tr><td align="center" colspan=5 bgcolor=#669999 border="0" width="25" >Copyright © 2018 DMCTE ELMS. All rights reserved.</td></tr>

</table></body>
</html>

