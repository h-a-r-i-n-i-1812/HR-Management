<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "Sh181203#";
$dbname = "hr management";

// Get form data

$id=$_POST["t1"];
$name = $_POST["t2"];
$doj= $_POST["t3"];
$email = $_POST["t4"];
$phone=$_POST["t5"];
$dob=$_POST["t6"];
$role=$_POST["t7"];
$last=$_POST["t20"];
$profile=$_POST["t50"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into table
$sql = "INSERT INTO employee (eid,firstName,lastName,role,dob,doj,phone,email,photo) VALUES ('$id','$name','$last','$role', '$dob','$doj','$phone','$email','$profile')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Details updated successfully')</script>
    <script>window.open('insert.html','_self')</script>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>