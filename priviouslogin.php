<?php   
 session_start();
include("connection.php");
?>

<html>
<head>
<style type="text/css">
.submit{
	

	color:blue;
	
}
	.login{
		font-family:Andalus;
		font-style:italic;
		font-size:150%;
		font-color:red;
	}

</style>
<link style="text/css" href="1.css" rel="stylesheet">
<script type='text/javascript'>
function  validateForm()
{


        var uname = document.getElementById('uname');
      var pass = document.getElementById('pass');
	  //var usertype = document.getElementById('usertype');
	 
	 
	 
	
		  if(isAlphanumeric( uname, "Please fill your user Name ")){
		  if(lengthRestriction(uname, 2, 32,"for your user name")){
	
		if(isAlphanumeric(pass, "enter password")){  
	if(lengthRestriction(pass, 3, 32,"for your password")){
		if(madeSelection(usertype,"please select usertype")){

			 
return true;
		  }}}}}
				
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
function madeSelection(elem, helperMsg){
	if(elem.value =="..select.."){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;}
		
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

<link style="text/css" href="11.css" rel="stylesheet">
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
<td align="center" width="1200"valign="bottom" bgcolor= #778899>
<a href="index.php" class="a">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php"class="a">About US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=" contact.php"class="a">contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.youtube.com"class="a">Tutorials</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



</td>
<td align="right" border="0" bgcolor= #778899><br>
<a href="login.php" class="a">Login</a></b></td></tr>
</table><br><br>
<table border="0"  width="1210"height="450"  align="center">
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
  BTVTC</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one"><br>
<img src="images/login_icon1.gif" width="400" height="150" align="top" ><br><br><br>

<form name="login" action="login.php" method="post" onSubmit="return validateForm()">
<table border="0"bgcolor="white" class="login"><tr><td border="0">
 <font color="blue">
User Name&nbsp;&nbsp;&nbsp;</font></td><td border="0"><input type="text" name="username" id="uname" placeholder="..enter Uname.." size="15%"></td></tr>
<tr><td> <font color="blue">Password</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<input type="password" id="pass" name="password" placeholder="..enter pass.." size="15%"></td></tr>
<!--<tr><td><font color="blue">User type</font>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select  name="usertype">
<option selected>..select..</option><option>Acadamic_Dean</option><option>Registrar</option>
<option>Instructor</option><option>Student</option></select></td></tr>-->
<tr><td colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Login' name='login' class="submit">&nbsp;&nbsp;&nbsp;
<input type='reset' value='Cancel'/></td></tr></table><br>
<?php
 if(isset($_POST['login']))
 {
   $username =$_POST['username'];
   $password1=$_POST['password'];
  $password= md5($password1);
  
    $result_set = mysql_query("SELECT * FROM account WHERE 	username= '{$username}' AND password= '{$password}' ");
   if(mysql_num_rows($result_set)==0)
   {
	 $result = mysql_query("SELECT * FROM instructor WHERE 	username= '{$username}' AND password= '{$password}' ");
   if(mysql_num_rows($result)==0)
   {
	  $result_set2 = mysql_query("SELECT * FROM student WHERE 	username= '{$username}' AND password= '{$password}' ");
	$row2 = mysql_fetch_array($result_set2);
	
	if(mysql_num_rows($result_set2)>0)
{
	   session_start();
		$_SESSION['studentid']=$row2['studentid'];
		echo "<script>window.location='student.php';</script>";
		 echo'<meta content="3;login.php" http-equiv="refresh"/>';

} 
	   
   }
   else{
   $ro=mysql_fetch_array($result);
   
	if(mysql_num_rows($result)>0)
{
	$status=$ro['status'];
	if($status=='on')
	{
	   session_start();
		$_SESSION['instructorid']=$ro['instructorid'];
	echo "<script>window.location='instructor.php';</script>";
	 echo'<meta content="3;login.php" http-equiv="refresh"/>';
   }}}}
	   
   
   else{
   $row=mysql_fetch_array($result_set);

$usertype=$row['usertype'];
if($usertype==dean)
{
if(mysql_num_rows($result_set)>0)
{
	session_start();
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='dean.php';</script>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">User Name & Password Not Match !!</font>'; 
  
   echo '</center>';
   }}
       if($usertype==registrar)
      {
	   
	   //$query = "SELECT * FROM account WHERE 	username= '{$username}' AND password= '{$password}' ";
       //$result_set=mysql_query($query);
	   //$row=mysql_fetch_array($result_set);
      
		// $password_hash = crypt($password);
if(mysql_num_rows($result_set)>0)
{
	session_start();
$_SESSION['accountid']=$row['accountid'];

echo "<script>window.location='registrar.php';</script>";
 echo'<meta content="3;login.php" http-equiv="refresh"/>';

}
/*
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">User Name & Password Not Match !!</font>'; 
   echo'<meta content="3;login.php" http-equiv="refresh"/>';
  
   echo '</center>';
   }*/
	   
   }
      
   
  
		/*else
		{
			echo '<font face="monotype corsiva" size="5" color="red">dear instructor your account was deactivated please contact Acadamic dean</font>';
			 echo'<meta content="3;login.php" http-equiv="refresh"/>';
			
		}/

}
//if($num1 < 1)
/*else
{
	//echo 'no';
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">User Name & Password Not Match !!</font>'; 
   echo'<meta content="3;login.php" http-equiv="refresh"/>';
  //echo "<script>window.location='login.php';</script>";
  
   echo '</center>';
   }
		   
	   }
	   */
	  
    
else
{
	//echo 'no';
   echo '<center>';
  //echo '<font face="monotype corsiva" size="5"color="red">User Name & Password Not Match !!</font>'; 
  echo "username and password not match!!";
  echo'<meta content="3;login.php" http-equiv="refresh"/>';
  //echo "<script>window.location='login.php';</script>";
  
   //echo '</center>';
   }
		   
		   
	   }}
mysql_close($conn);

?>







</form>
</td>
<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="http://www.BTVTC.edu.et"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* BTVTC website</font></a><br>
<a href="site.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * Site map</font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2021  BTVTC ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
