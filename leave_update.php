<link rel="stylesheet" type="text/css" href="style.css">

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data
  $id=$_POST["t1"];
  $amount= $_POST["t6"];
  $status= $_POST["t9"];

  // Connect to database
  $servername = "localhost";
  $username = "root";
  $password = "Sh181203#";
  $dbname = "hr management";;

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Update database with new details
  $sql = "UPDATE empleave SET status='$status', days='$amount', remaining=remaining-$amount WHERE eid='$id'";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Details updated successfully')</script>
    <script>window.open('view_leave.php','_self')</script>";
  } else {
    echo "Error updating details: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>

<div></div>
    <div class="form-container">
      <h2 class="form-heading">Employee Details</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <label for="eid">Employee ID:</label>
        <input type="text" id="name" name="t1" placeholder="Employee ID">

        <label for="reason">No.of Days:</label>
        <input type="text" id="name" name="t6" placeholder="Days">

        <label for="status">Status:</label>
        <input type="checkbox" id="yesno" name="t9" value="yes"> Yes
        <input type="checkbox" id="yesno" name="t9" value="no"> No

        <input type="submit" value="Submit">
      </form>
    </div>
