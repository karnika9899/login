<?php
		require_once('connect.php');
		$con=mysqli_connect($servername,$username,$password,"insomaniac") or die("Could not connect");
		$fname=$_REQUEST['Firstname'];
	    $lname=$_REQUEST['Lastname'];
	    $email=$_REQUEST['Email'];
$passwd=$_REQUEST['Password'];
$gendr=$_REQUEST['gender'];
$dat=$_REQUEST['DOB'];


$query="Insert into register(FirstName,LastName,Email,Password,gender,DOB) values('$fname','$lname','$email','$passwd','$gendr','$dat')";
$query2="Insert into signin(Email,Password)values('$email','$passwd')";
$res=mysqli_query($con,$query) or die('records already exists'.mysqli_error($con));
$res2=mysqli_query($con,$query2) or die('Error in saving records'.mysqli_error($con));
if($res && $res2)
{
	echo"<script>alert('User Registered Successfully');window.location='index.php';</script>";
}
	    	?>