<html>
<head>
<title>MID1</title>
<style>
body{
	background-color: grey;
}
table,th,td{
	border:2px solid black;
	width:1100px;
        border-collapse: collapse;
	background-color: lightgreen;
}
.btn{
	width:10%;
	height: 5%;
	font-size: 22px;
	padding: 0px;
}
</style>
</head>
<body>
<center>
<h1>ENTER THE REGISTRARION NUMBER<h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="registration_no" class="btn" placeholder="ENTER ID"/>
<input type="submit" name="view"  class="btn" value="view">
</form>
<table>
<tr>
<td>CN</td>
<td>WT</td>
<td>FLAT</td>
<td>DBMS</td>
<td>JAVA</td>
<td>CS</td>
</tr>

<?php
$con=mysqli_connect('localhost','root','','marksdb');
if(isset($_POST['view']))
{
	$registration_no=$_POST['registration_no'];
	$query="select * from mid1 where registration_no='$registration_no'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run))
	{
		?>
		<?php echo "Mid 1 marks of"?>  <?php echo $row['registration_no']?>  <?php echo "is:"?><br><br>
		<tr>
		  <td> <?php echo $row['cn'] ?></td>
		  <td> <?php echo $row['wt'] ?></td>
		  <td> <?php echo $row['flat'] ?></td>
		  <td> <?php echo $row['dbms'] ?></td>
		  <td> <?php echo $row['java'] ?></td>
		  <td> <?php echo $row['cs'] ?></td>
		</tr>
		<?php 
	}		
}

?>
</table>
<h3>Click <a href="viewmarks.html">here</a> to go back.</h3>
</center>
</div>
</body>
</html>