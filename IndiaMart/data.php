<?php
$servername = "localhost";
$username = "padmin";
$password = "root";
$dbname = "Store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);

// Attempt insert query execution
$sql = "INSERT INTO info (firstname, lastname, email, contact) VALUES ('$first_name', '$last_name', '$email', '$contact')";
if(mysqli_query($conn, $sql)){
  echo "<script type='text/javascript'>alert('You will get a Call within 24hours.');</script>";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>