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
<script type='text/javascript'>
function check()
{


        var newpass = document.getElementById('newpass');
      var confpass = document.getElementById('confpass');
	 
	
		  if(isAlphanumeric( newpass, "Please fill new password ")){
		  if(lengthRestriction(cname, 8, 32,"for password")){
	
		if(isAlphanumeric(confpass, "please fill confirm password")){  
	if(lengthRestriction(ccode, 8, 32,"for confirmpassword")){

		
		
		
			 return true;

				   }}}} 
				
	return false;
	
}
	
  
  

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
tr>
<td  border="0"align="center"><img src="images/header.png" width="600" height="50"></td>

<td  border="0"align="center"></td>

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

                   <form id="form1" name="login" method="POST" action="changepassword.php" onSubmit="return check()">
                <font  type="Andalus"size="+2"color="blue">Change Password.......</font>
            <table width="350" align="center">
       <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> <font color="blue"size="4px">Old Password:</font></td>
		 <td><input type="password" id='opas'name="old_password" required x-moz-errormessage="Enter Old password" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font><font color="blue"size="4px"> New Password:</font></td>
		 <td><input type="password" id="newpass"name="new_password" required x-moz-errormessage="Enter New Password" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> <font color="blue"size="4px">Confirm Password:</font></td>
		 <td><input type="password" id="confpass"name="confirm_password" required x-moz-errormessage="Re-type your Password" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="changepassword" value="Change Password" class="button_example"/>
	
	
	
	
	</td>
  </tr>
</table> 


 <?php
if(isset($_POST['changepassword']))
{
$oldpass1 = $_POST['old_password'];
$oldpass=md5($oldpass1);
$newpass1 = $_POST['new_password'];
$confirmpass1 = $_POST['confirm_password'];
$newpass=md5($newpass1);
$confirmpass=md5($confirmpass1);

$result=mysql_query("select * from account where password='{$oldpass}' AND username='$username' ");
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
    if($newpass!=$confirmpass){
	       echo'  <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
		   echo' <meta content="5;changepassword.php" http-equiv="refresh" />';
		   }
		   else
		   {
  $query="update account set password='{$newpass}' where password='{$oldpass}'";
        $result=mysql_query($query);
		 echo'  <p class="success"> Your password has been changed successfuly!</p>';
         echo' <meta content="1;login.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo'  <p class="wrong">Wrong Old password!</p>';
 echo' <meta content="2;changepassword.php" http-equiv="refresh" />';
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
