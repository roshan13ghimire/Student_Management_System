<?php
$registration_no=$_POST['registration_no'];
$cn=$_POST['cn'];
$wt=$_POST['wt'];
$flat=$_POST['flat'];
$dbms=$_POST['dbms'];
$java=$_POST['java'];
$cs=$_POST['cs'];
$con=mysqli_connect('localhost','root','','marksdb');
$query="INSERT INTO mid1(registration_no, cn, wt, flat, dbms, java, cs) VALUES ('$registration_no','$cn','$wt','$flat','$dbms','$java','$cs')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	echo "inserted <a href='marks1.html'>Click here to insert another students marks</a>";
	echo "<br><br>";
	echo "click<a href='insertmarks.html'> here</a> to go to admin section";
}
else
{
	echo "not inserted";
	
}
?>