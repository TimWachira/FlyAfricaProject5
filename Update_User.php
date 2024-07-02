<?php
// Database connection 
$servername = "localhost";
$username = "root";
$password = "";
$database = "flights";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
  $user_id = intval($_POST['user_id']);
  $username = $_POST['username'];
  $email = $_POST['email'];

  // Update user details in the database
  $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $username, $email, $user_id);

  if ($stmt->execute()) {
    echo "User updated successfully.";
  } else {
    echo "Error updating user: " . $conn->error;
  }

  $stmt->close();
}

$conn->close();
?>