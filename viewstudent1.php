<!--?php
include('header.php');
?-->
<br><br><center><font family="anduls"size="+3" color="blue"> Here is List of student in your Department!</font></center> 
<br><br>
<?php
if(isset($_POST['view']))
{
	include('connection.php');
$dept=$_POST['departmentname'];
$year=$_POST['year'];
    $result_set = mysqli_query($conn,"SELECT * FROM student where departmentid='{$dept}' and year='{$year}'");
if(!$result_set)
	{
die("query is failed".mysqli_error());
}
if(mysqli_num_rows($result_set)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center' valign='top'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Id Number</th>
<th bgcolor='#336699'><font color='white' size='2'>First Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Last Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Age </th>
<th bgcolor='#336699'><font color='white' size='2'>Sex</th>
<th bgcolor='#336699'><font color='white' size='2'>Department</th>
<th bgcolor='#336699'><font color='white' size='2'>Year</th>
<th bgcolor='#336699'><font color='white' size='2'>Semister</th>

</tr>";
while($row=mysqli_fetch_array($result_set))
{
	$deptid=$row["departmentid"];
	$d=mysqli_query($conn,"select * from department where departmentid='{$deptid}'");
	$col=mysqli_fetch_array($d);
echo"<tr>";
echo"<td>";echo $row["studentid"]; echo"</td>";
echo"<td>";echo $row["firstname"]; echo"</td>";
echo"<td>";echo $row["lastname"]; echo"</td>";
echo"<td>";echo $row["age"]; echo"</td>";
echo"<td>";echo $row["sex"]; echo"</td>";
echo"<td>";echo $col['departmentname'];echo"</td>";
echo"<td>";echo $row["year"]; echo"</td>";
echo"<td>";echo $row["semister"]; echo"</td>";
//echo"</tr>";
}
//echo "</table>";

}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">student not found !!</font>'; 
  
   echo '</center>';
}}

?>
<br>
<center>
<input type="button" value="Print" onclick="window.print()">
</center>
<!--?
include('footer.php');
?-->