<?php

// Get form data

$id=$_POST["t11"];

// Database credentials
$servername = "localhost";
$username = "root";
$password = "Sh181203#";
$dbname = "hr management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM employee WHERE eid='$id'";



// SQL query to insert data into table

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('records deleted successfully')</script>
   <script>window.open('delete_form.php','_self')</script>";
} else {
    echo "<script>window.open('FirstPage.html','_self')</script> " . $conn->error;
}

// Close connection
$conn->close();
?>