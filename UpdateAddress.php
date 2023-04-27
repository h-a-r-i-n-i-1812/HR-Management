<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "Sh181203#";
$dbname = "hr management";

// Get form data

$id=$_POST["b1"];
$name = $_POST["type"];
$text1=$_POST["textbox1"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>$name,$text1,$id</h1>";
// SQL query to insert data into table
$sql = "UPDATE address SET $name='$text1' WHERE eid='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('data updated successfully')</script>
    <script>window.open('AddrUpdateForm.html','_self')</script>";
} else {
    echo "<script>alert('Error updating data')</script>" . $conn->error;
}

// Close connection
$conn->close();
?>
