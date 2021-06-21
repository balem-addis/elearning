

<?php

	
if(isset($_POST['register']))
{

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$studentid=$_POST['id'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$department=$_POST['dept'];
$year=$_POST['year'];
$semister=$_POST['semister'];


$reg=mysqli_query($conn,"insert into student(firstname,lastname,id_number,age,sex,department,year,semister)  values('$firstname','$lastname','$studentid','$age','$sex','$department','$year','$semister'");
if(!mysqli_query($conn,$reg,$conn)){
	
die("query is failed".mysqli_error());
}
			else
				{
echo "Registered Successfully!";
}
mysql_close($conn);
}
?>