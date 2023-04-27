<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "Sh181203#";
$dbname = "hr management";

// Get form data

$id=$_POST["b1"];
$name = $_POST["type"];

if($name=="profile")
{
    $text1=$_POST["textbox3"];
}
else if($name=="dob"){
    $text1=$_POST["textbox2"];
}
else{
    $text1=$_POST["textbox1"];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into table
$sql = "UPDATE employee SET $name='$text1' WHERE eid='$id'";

if ($conn->query($sql) === TRUE) {
    echo" <script>
 alert(' Sucessfully Inserted!');
 </script>
 <script>window.open('update_form.html','_self')</script>";
 } else {
    echo "<script>alert('Error updating data')</script>" . $conn->error; }


// Close connection
$conn->close();
?>
