<?php
define("db_server","localhost");
define("db_user","root");
define("db_name","e-learning");
define("db_password","");
$conn=mysql_connect(db_server,db_user);
if(!$conn)
{
die("Error in connection".mysql_error());
}
$db_select=mysql_select_db(db_name,$conn);
if(!$db_select)
{
die("Error in db select".mysql_error());
}
?>
