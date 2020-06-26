<?php


echo $_POST['username'];
echo $_POST['email'];





$con=mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo "not connected to server";
}
if(mysqli_select_db($con,'registration_aishi'))
{
	echo "database not selected";
}

$Name=$_POST(username);
$Email=$_POST(email);

$sql="INSERT INTO `people` (`id`, `Name`, `Email`) VALUES ( '$Name', '$Email'); "

if(!mysqli_query($con,$sql))
{
	echo "not inserted";

}
else
{
	echo "inserted";
}
header("refresh:2,url=form2.html");



?>