<?php
$servername = "localhost";
$username = "root";   // default in XAMPP
$password = "";       // default in XAMPP
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get values from form
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
