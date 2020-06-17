<?php
$count=0;
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$con=mysqli_connect('localhost','root','','db');

    $query ="SELECT registration_no FROM dbms";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run))
	{
		
		if($row["registration_no"]==$uname && $row["registration_no"]==$pwd)
		{
			$count++;
			break;
		}
	}
	if($count==1)
	{
		echo "Login Successfully";
		header("refresh:1;url=studentinfo.html");
	}
	else
	{
		echo "Wrong username and password";
		header("refresh:1;url=student.html");
		
	}

?>