<?php
session_start();
$_SESSION['emp'];
$servername ="localhost";
$username="root";
$password="Sh181203#";
$database="hr management";
$conn=mysqli_connect($servername,$username,$password,$database);

$id= $_SESSION['emp'] ;
$benefit=$_GET["b"];
$amount=$_GET["a"];

$sq="insert into benefit(eid,reason,amount,status) values('$id','$benefit','$amount','no')";
$re=mysqli_query($conn,$sq);

if($re)
{
    echo
    "
    <script>
alert('benefits claimed sucessfully');
</script>
<script>window.open('benefit.html','_self')</script>


    ";
}

?>

