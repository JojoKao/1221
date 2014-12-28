<html>
<?php
require_once "config.php";
$id = $_POST['id'];
$passwd=$_POST['passwd'];
$conn=mysql_connect($dbServer, $dbUser , $dbPass) or die("Can not connect to mysql");
mysql_select_db('D10116115');
$sql= "select * from user_profile where id = '{$id}'";
$res=mysql_query($sql) or die("Can not get Data");
$row=mysql_fetch_array($res);
$loginSuccess=false;
if ($row && $row['password'])
{
   if(md5($passwd)== $row['password'])
   {

        $loginSuccess = true;

    }

}
if ($loginSuccess)
{

}
else
{

}

?>

</html>