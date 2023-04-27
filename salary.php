<!DOCTYPE html>
<html>
<head>
	<title>Salary Details</title>
	<style>
		
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
            box-shadow: 0 0 10px blue;

			
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
			background-color: black;
			font-weight: normal;
		}
		table td {
			color: #666;
			font-weight:bold;
		}
		.left {
			float: left;
			width: 200px;
            background-color: black;
            font-size:15px;
            font-weight: bold;
            color:white;
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

$sq="select * from salary where eid='$id'";

$sql="select * from employee where eid='$id'";
//photo
$query=mysqli_query($conn,$sql);
$row_query=mysqli_fetch_array($query);
$name=$row_query['firstName'];
$photo=$row_query['photo'];
//salary
$run_user=mysqli_query($conn,$sq);
$row_user=mysqli_fetch_array($run_user);

?>
<body>
	<h1> WELCOME<?php echo " ".$name ."!!"?></h1>
    <p style="text-align: center;"><img style="border-radius: 50%;" src="<?php echo $photo;?>" alt="Person's profile picture" width="300" height="300"></p>
	<table>
		<tr>
			<th class="left">DEARNESS ALLOWANCE:</th><td class="right"><?php echo "₹".$row_user['da'] ?></td>
		</tr>
		<tr>
			<th class="left">HOUSE RENT ALLOWANCE:</th>
			<td class="right"><?php echo "₹".$row_user['hra'] ?></td>
		</tr>
		<tr>
			<th class="left">PROVIDENT FUND:</th>
			<td class="right"><?php echo "₹".$row_user['pf'] ?></td>
		</tr>
		<tr>
			<th class="left">BASIC PAY:</th>
			<td class="right"><?php echo "₹".$row_user['basic'] ?></td>
		</tr>
		<tr>
			<th class="left">GROSS PAY:</th>
			<td class="right"><?php echo "₹".$row_user['da']+ $row_user['hra']+$row_user['basic'] - $row_user['pf']  ?></td>
		</tr>
		
	</table>

</body>
</html>