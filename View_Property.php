<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Property</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="CRUD Styles.css">
</head>
<body>
    <!-- Navigation List -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="Destinations.php">Destinations</a></li>
            <li><a href="SkyLoyalty.php">SkyLoyalty</a></li>
            <li><a href="Experiences.php">Experiences</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </nav>
    <div class = "container"></div>
    <h2>Lost Property</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flights";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, full_name, email, phone, flight_number, departure_date, departure_airport, arrival_airport, item_description, last_seen FROM LostItems";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Flight Number</th><th>Departure Date</th><th>Departure Airport</th><th>Arrival Airport</th><th>Description</th><th>Last Seen</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["full_name"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["phone"]. "</td>
                <td>" . $row["flight_number"]. "</td>
                <td>" . $row["departure_date"]. "</td>
                <td>" . $row["departure_airport"]. "</td>
                <td>" . $row["arrival_airport"]. "</td>
                <td>" . $row["item_description"]. "</td>
                <td>" . $row["last_seen"]. "</td>
                <td><a href='update.php?id=" . $row["id"] . "'>Edit</a> 
                | <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
