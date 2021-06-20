<?php

	include("connection.php");  
 session_start();
if(isset($_POST['upload']))
{    
	$instructorid=$_POST['instructorid'];
$result=mysql_query("SELECT * from instructor where instructorid='{$instructorid}' ");
$num = mysql_num_rows($result);
   if($num==0 && $instructorid!="")
	   {
  echo "<script> alert('are u instructor pls check your id!!')</script>";
				echo "<script>window.location='uploadassignment.php';</script>";
  }
  else{


	$coursecode=$_POST['coursecode'];
	$result1=mysql_query("SELECT * from course where coursecode='{$coursecode}' ");
$num1 = mysql_num_rows($result1);
   if($num1==0 && $coursecode!="")
	   {
  echo "<script> alert('if you are instructor check course code!!')</script>";
				echo "<script>window.location='uploadassignment.php';</script>";
  }
else
	  {

	$assignmenttype=$_POST['assignmenttype'];
	$department=$_POST['department'];
	$year=$_POST['year'];
	$semister=$_POST['semister'];
	$date=$_POST['date1'];
	foreach($_FILES['files']['tmp_name'] as $key => $name_tmp)
	{
		$name=$_FILES['files']['name'][$key];
		$tmpnm=$_FILES['files']['tmp_name'][$key];
		$type=$_FILES['files']['type'][$key];
		$size=$_FILES['files']['size'][$key];
		$dir="module/".$name;
		$mov=move_uploaded_file($tmpnm, $dir.$name);
		if($mov)
		{
			$res=mysql_query("insert into assignment values('','','','$instructorid','$coursecode','$assignmenttype','$year','$semister','$department','$name','$type','$size',now(),'$date','')");
			if($res)
			{
				echo "<script> alert('uploaded successfully!!')</script>";
				echo "<script>window.location='uploadassignment.php';</script>";
			}
			else
			{
				echo "something wrong";
			//echo "<script> alert('something wrong')</script>";
			echo' <meta content="5;uploadassignment.php" http-equiv="refresh" />';
			}}
			
			}
			}
			}}
			?>