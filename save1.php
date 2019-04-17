<?php
$u=$_REQUEST['Email'];
$p=$_REQUEST['password'];
require_once('connect.php');

$con=mysqli_connect($servername,$username,$password,"Insomaniac") or die("Could not connect to server");

$query="Select email,password from signin where email='$u'";

//Execute Query
$res=mysqli_query($con,$query) or die('Error in fetching records'.mysqli_error($con));

$row=mysqli_fetch_array($res);
if($row[1]==$p)
{
	session_start();
	$_SESSION['Email']=$u;
	header('Location:new.php');
}
else
{
	echo"<script>alert('Username or Password Incorrect');window.location='signin.php';</script>";
}
?>
