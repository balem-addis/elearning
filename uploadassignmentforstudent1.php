<?php

	include("connection.php");  
 session_start();

if(isset($_POST['upload']))
{

	$number=$_POST['number'];

$result=mysql_query("SELECT * from assignment where assignmentnumber='{$number}' ");
$num = mysql_num_rows($result);
   if($num==0 && $number!="")
	   {
	   echo "<script> alert('this assignment number is not allocated for any assignment!!!!')</script>";
  echo "<script>window.location='uploadassignmentforstudent.php';</script>";
  }
else
	{

	$studentid=$_POST['sid'];

	$result1=mysql_query("SELECT * from student where id='{$studentid}' ");
$num1 = mysql_num_rows($result1);
   if($num1==0 && $number!="")
	   {
	   echo "<script> alert('unknown id numbe pls check it!!!!')</script>";
  echo "<script>window.location='uploadassignmentforstudent.php';</script>";
  }
  else
		{
	
	$coursecode=$_POST['ccode'];
	$result2=mysql_query("SELECT * from course where coursecode='{$coursecode}' ");
$num2 = mysql_num_rows($result2);
   if($num2==0 && $number!="")
	   {
	   echo "<script> alert('unknown coursecode check it!!!!')</script>";
  echo "<script>window.location='uploadassignmentforstudent.php';</script>";
  }

else
			{
	$assignmenttype=$_POST['asstype'];
	$department=$_POST['dept'];
	$year=$_POST['year'];
	$semister=$_POST['sem'];
	foreach($_FILES['files']['tmp_name'] as $key => $name_tmp)
	{
		$name=$_FILES['files']['name'][$key];
		$tmpnm=$_FILES['files']['tmp_name'][$key];
		$type=$_FILES['files']['type'][$key];
		$size=$_FILES['files']['size'][$key];
		$dir="module/".$name;
		
			
			
		$mov=move_uploaded_file($tmpnm,$location.$name);
		

		if($mov)
		{
			$res=mysql_query("insert into assignment values('','$number','$studentid','','$coursecode','$assignmenttype','$year','$semister','$department','$name','$type','$size',now(),'',now())");
			if($res)
			{
				echo "<script> alert('uploaded successfully!!')</script>";
				echo "<script>window.location='uploadassignmentforstudent.php';</script>";
			}
			else
			{
			echo "<script> alert('something wrong')</script>";
			echo "<script>window.location='uploadassignmentforstudent.php';</script>";
			}}
			else
				{
				 echo "<script> alert('file not found')</script>";
			}
			
	}
			}}}}
			?>