<?php
define("db_server","localhost");
define("db_user","root");
define("db_name","e-learning");
define("db_password","");
$conn=mysqli_connect(db_server,db_user,db_password,db_name);
if(!$conn)
{
die("Error in connection".mysqli_error());
}/*
$db_select=mysql_select_db(db_name,$conn);
if(!$db_select)
{
die("Error in db select".mysql_error());
}*/
?>
