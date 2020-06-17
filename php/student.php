<?php
$name=$_POST['uname'];
$pwd=$_POST['pwd'];
$con=mysqli_connect('localhost','root','','db');
if($con==TRUE)
{
//	echo 'connected';
	
	
}	
else
{
	
	echo 'not connected';
	
}

if($name=="admin" && $pwd=="admin")
{
	
	echo "login successfully";
	header("refresh:1;url=registration.html");

	
	
}
else
{
	echo "invalid username or password";
	header("refresh:1;url=admin.html");
}

?>