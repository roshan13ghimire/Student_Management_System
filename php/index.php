<?php
$name=$_POST['name'];
$fathers_name=$_POST['fathers_name'];
$email_id=$_POST['email_id'];
$mobile_number=$_POST['mobile_number'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$city=$_POST['city'];
$pin_code=$_POST['pin_code'];
$state=$_POST['state'];
$country=$_POST['country'];
$hobby=$_POST['hobby'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$section=$_POST['section'];
$registration_no=$_POST['registration_no'];
$con=mysqli_connect('localhost','root','','db');
$query="INSERT INTO `dbms`(`name`, `fathers_name`, `email_id`, `mobile_number`, `gender`, `blood_group`, `address`, `city`, `pin_code`, `state`, `country`, `hobby`, `course`, `branch`, `section`, `registration_no`) VALUES ('$name','$fathers_name','$email_id','$mobile_number','$gender','$blood_group','$address','$city','$pin_code','$state','$country','$hobby','$course','$branch','$section','$registration_no')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	echo "inserted <a href='registration.html'>Click here to insert more</a>";
	
	echo "<br><br>";
	
	echo "click<a href='registration.html'</a> here to go back";
}
else
{
	echo "not inserted";
	
}
?>