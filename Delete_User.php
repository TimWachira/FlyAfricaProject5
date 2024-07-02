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

// Check if the id is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Converts the id to an integer for security

    // Delete statements
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute and close the statement
    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    }

    $stmt->close();

} else {
    echo "No user ID specified.";
}

// Close connection
$conn->close();
?>


