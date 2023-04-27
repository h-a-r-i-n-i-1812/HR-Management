<?php
session_start();
$_SESSION['emp'];
$servername ="localhost";
$username="root";
$password="Sh181203#";
$database="hr management";
$conn=mysqli_connect($servername,$username,$password,$database);

$id=$_SESSION['emp'];
$days=$_GET["d"];
$reason=$_GET["r"];
$rem=15-intval($days);


$sq="insert into empleave values('$id','$days','$reason','$rem','no')";

$re=mysqli_query($conn,$sq);

if($re)
{
    echo
    "
    <script>
alert('leave applied sucessfully');
</script>
<script>window.open('leave.html','_self')</script>

    ";

}
else 
echo "<script>
alert('error')";

?>

