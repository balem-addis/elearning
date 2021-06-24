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
			$sex=$row['sex'];
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
  BTVTC ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" bgcolor="#FFFFFF" class="one">
<br><br>
<form action="updatestudentresult.php" method="post" name="form1">
<?php
 //include('connection.php');
$result = mysql_query ("SELECT * FROM courseinstructor where 	instructorid='{$instructorid}'");
 echo '<label>Select course Name:</label>';
 echo '<select id="ccode" name="coursename">';
echo '<option selected>..select..</option>';
while ($row = mysql_fetch_array($result)) 
{
$cname = $row['coursename']; 
$ccode=$row['coursecode'];

echo "<option value='$ccode'>$cname</option>";
}
echo '</select>';
echo'<br>';
echo'<br>';


 ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student ID&nbsp;&nbsp;<input type="text" name="sid"id="sid"><br><br><br>
<input type="submit" value="View" name="view"><br>

<?php
include('connection.php');
if(isset($_POST['view']))
{
	$ccode=$_POST['coursename'];
	$sid=$_POST['sid'];
	
	$result=mysql_query("select * from result where studentid='{$sid}' AND coursecode='{$ccode}'");
	if(mysql_num_rows($result)==1)
	{
while($row=mysql_fetch_array($result))
{
$studentid=$row["studentid"]; 
$coursecode= $row["coursecode"]; 
$quizz=$row["quizz"]; 
$test= $row["test"];
$indiv= $row["individualassignment"]; 
$group= $row["groupassignment"]; 
$final= $row["final"];
$total= $row["total"]; 
$grade= $row["grade"];

}}
?>
<table style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">
        <tr>
           
            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Student Id:</td>
            <td class="auto-style4">
                <input id="studentid" name="studentid" type="text" value=' <?php echo $studentid;?>' /></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">course code</td>
            <td class="auto-style4">
                <input id="coursecode" name="coursecode" type="text" value=' <?php echo $coursecode;?>'></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">quizz:</td>
            <td class="auto-style4">
                <input id="quizz" name="quizz" type="text" value='<?php echo $quizz;?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Test:</td>
            <td class="auto-style4">
                <input id="test" name="test"type="text" value='<?php echo $test;?>' /></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Individual:</td>
            <td class="auto-style4">
                <input id="individual" name="individual"type="text" value='<?php echo $indiv;?>' /></td>
        </tr>
        <tr>
           <td style="color:red;background-color:aqua;" class="auto-style3">Group:</td>
            <td class="auto-style4">
                <input id="group" type="text" name="group" value='<?php echo $group;?>' ></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Final:</td>
            <td class="auto-style4">
                <input id="final" type="text" name="final" value='<?php echo $final;?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3" >Total:</td>
            <td class="auto-style4">
                <input id="Text8" type="text" name="total"value=' <?php echo $total;?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Grade:</td>
            <td class="auto-style4">
                <input id="Text9" type="text"  name="grade "value=' <?php echo $grade;?>' /></td>
        </tr>
        
    </table><br><center>
<input type ="submit" value="update" name="update"></center>

<?php }
?>

<?php
if(isset($_POST['update']))
{
	$studentid1=$_POST['studentid'];
	$coursecode1=$_POST['coursecode'];
$quizz=$_POST['quizz'];	
	$test=$_POST['test'];	
	$individual=$_POST['individual'];	
	$group=$_POST['group'];	
	$final=$_POST['final'];	
	$total=$quizz+$test+$individual+$group+$final;
	if($total>=85)
	{
	$grade="A";
	}
	else if($total>=70)
	{
	$grade="B";
	}
	else if($total>=50)
	{
	$grade="C";
	}
	else if($total>=40)
	{
	$grade="D";
	}
	else if($total<40)
	{
	$grade="F";
	}
	
	$res=mysql_query("UPDATE  result set quizz='$quizz',test='$test',individualassignment='$individual',groupassignment='$group'
	,final='$final',total='$total',grade='$grade' where studentid='$studentid1' AND coursecode='$coursecode1'");
	echo"successfuly updated";
			
				
}
	

	


?>


</form>
  
  
</td>
<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Sub Link</h3></b></center></font>
<a href="viewprofileforinstructor.php"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* View Profile</font></a><br>
<a href="changepassword.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * Change Password</font></a><br>
<a href="updatestudentresult.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"></font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2021 BTVTC ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
