<!DOCTYPE html>
<html>
  <head>
    <title>HR page</title>
    <style>
      /* CSS styles for the sidebar */
      .sidebar {
        background-color: #333;
        color: white;
        height: 100vh;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        overflow-y: auto;
        padding: 20px;
      }
      .sidebar h2 {
        font-size: 1.5rem;
        margin-top: 0;
      }
      .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .sidebar li {
        margin-bottom: 10px;
      }
      .sidebar a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        transition: all 0.2s ease-in-out;
      }
      .sidebar a:hover {
        transform: scale(1.1);
      }
      
      /* CSS styles for the main content area */
      .main-content {
        margin-left: 250px;
        padding: 20px;
        background-color: #f2f2f2;
        font-size: 1.2rem;
        line-height: 1.5;
      }
      .main-content h1 {
        font-size: 2rem;
        margin-top: 0;
      }
      .main-content p {
        margin-bottom: 1.5rem;
      }
      .main-content .highlight {
        background-color: yellow;
        font-weight: bold;
      }
	  .i{
       background-color:rgb(157, 201, 237);
	  }
    </style>
  </head>
  <body>
	<div class="i">
	<img src="Image.png" width="1500" height="200">

	</div>
    <div class="sidebar">
      <h2>Options</h2>
      <ul>
        <li><a href="insert.html">Insert employee Details</a></li>
        <li><a href="update_form.html">Update employee Details</a></li>
        <li><a href="AddrUpdateForm.html">Add employee address</a></li>
		<li><a href="salaryform.html"> Salary </a></li>
        <li><a href="view_benefit.php">Approve benefit</a></li>
        <li><a href="view_leave.php">Approve leave </a></li>
        <li><a href="delete_form.php">Remove Employee </a></li>
      </ul>
    </div>
    <div class="main-content">
      
      <h1 style="text-align:center">
      <?php

// Get form data

$id=$_POST["id"];
$email=$_POST["email"];
$pass=$_POST["password"];




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
$stmt = "SELECT * FROM hradmin where hid='$id' and password='$pass'";
$result = $conn->query($stmt);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Welcome {$row['hname']}";
    }
}
?>
      </h1>
      <p>Our HR department is committed to creating a positive and prductive work environment for all employees. We offer a variety of services and resources to help you succeed in your role and advance your career.</p>
      <h1 id="section2">Employee Directory</h1>
      <h2></h2>
      <p>Our employee directory provides contact information for all employees in the organization. You can use this directory to find the contact information for your colleagues and to connect with other departments or teams.</p>
		</div>
		</body>
		</html>