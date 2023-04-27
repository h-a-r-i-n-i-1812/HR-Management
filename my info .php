<!DOCTYPE html>
<html>
<head>
	<title>Personal Details</title>
	<style>
			body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
            box-shadow: 0 0 10px #db76af;		
		}
		h1 {
			color: #9d4a79;
			font-size: 28px;
			font-weight: bold;
			margin-bottom: 20px;
			margin-top: 20px;
			text-align: center;
			font-style:italic;


		}
		table {
			background-color: #fff;
			border-collapse: collapse;
			margin: auto;
			width: 600px;
		}
		table th, table td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: left;
			vertical-align: top;
		}
		table th {
			background-color: #f2f2f2;
			font-weight: normal;
		}
		table td {
			color: #666;
			font-weight:bold;
		}
		.left {
			float: left;
			width: 200px;
            background-color: rgb(217, 186, 203);
            font-size:15px;
            font-weight: bold;
            color:purple;
            font-family:Comic Sans MS;

		}
		.right {
			float: left;
			width: 300px;
		}
	</style>
</head>
<?php 
session_start();
 $_SESSION['emp'] ;
$id= $_SESSION['emp'] ;
$servername ="localhost";
$username="root";
$password="Sh181203#";
$database="hr management";
$conn=mysqli_connect($servername,$username,$password,$database);


$sq="select * from employee where eid='$id'";
$run_user=mysqli_query($conn,$sq);
$row_user=mysqli_fetch_array($run_user);
$date=strtotime($row_user['dob']);
$for=date('d F Y',$date);

$cover=$row_user['photo'];

$join=strtotime($row_user['doj']);
$j=date('d F Y',$join);
?>
<body>
	<h1><?php echo  "Welcome ". $row_user['firstName'] ?></h1>
    <p style="text-align: center;"><img style="border-radius: 50%;" src="<?php echo $cover;?>" alt="Person's profile picture" width="300" height="300"></p>
	<table>
		<tr>
			<th class="left">ID:</th><td class="right"><?php echo $row_user['eid'] ?></td>
		</tr>
		<tr>
			<th class="left">DATE-OF-BIRTH:</th>
			<td class="right"><?php echo $for?></td>
		</tr>
		<tr>
			<th class="left">DATE OF JOINING:</th>
			<td class="right"><?php echo $j?></td>
		</tr>
		<tr>
			<th class="left">ROLE:</th>
			<td class="right"><?php echo $row_user['role'] ?></td>
		</tr>
		<tr>
			<th class="left">PHONE:</th>
			<td class="right"><?php echo $row_user['phone'] ?></td>
		</tr>
		<tr>
			<th class="left">EMAIL:</th>
			<td class="right"><?php echo $row_user['email'] ?></td>
		</tr>
<?php

$sq="select * from address where eid='$id'";
$run_user=mysqli_query($conn,$sq);
$row_user=mysqli_fetch_array($run_user);
?>
<tr>
			<th class="left">ADDRESS:</th>
			<td class="right"><?php echo $row_user['doorNo'] .",".$row_user['street'] .",".$row_user['area']. ",".$row_user['city'].",".$row_user['pincode'].",".$row_user['state'];?></td>
		</tr>
	</table>

</body>
</html>