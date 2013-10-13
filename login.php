<?php
if  (isset($_REQUEST['attempt']))
{

$user=$_POST['user'];
$password=$_POST['password'];
//$link=mysql_connect('localhost','root','') or die ('Cannot connect to database');
include 'Db_connector.php';
mysql_select_db('hospital');
$query=mysql_query("select username from doctor where username='$user' and password='$password'") or die(mysql_error());
$total=mysql_num_rows($query);
if($total>0)
{
//session_start();
//$_SESSION['user']='Blah';
//header('location: dashboard.php');
echo "Logged in!";
exit();
}
else
{
echo "Not logged in";
exit();
}
}
?>
<form  method="post" action="login.php?attempt">
Username<input type="text" name="user" /><br /><br /><br />
Password<input type="password" name="password" /><br /><br /><br />
<input type="submit" value="Login">
</form>

