<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyAfrica - About Us</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="SearchFlights Styles.css">
</head>

<?php 
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

<div class="container">
    <h2>Available Flights</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "flights";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch available flights
    $sql = "SELECT flights.id, airlines.name as airline, flights.flight_number, departure_airport.name as departure, arrival_airport.name as arrival, flights.departure_time, flights.arrival_time, flights.price
            FROM flights
            JOIN airlines ON flights.airline_id = airlines.id
            JOIN airports AS departure_airport ON flights.departure_airport_id = departure_airport.id
            JOIN airports AS arrival_airport ON flights.arrival_airport_id = arrival_airport.id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Airline</th>
                    <th>Flight Number</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Price</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["airline"]. "</td>
                    <td>" . $row["flight_number"]. "</td>
                    <td>" . $row["departure"]. "</td>
                    <td>" . $row["arrival"]. "</td>
                    <td>" . $row["departure_time"]. "</td>
                    <td>" . $row["arrival_time"]. "</td>
                    <td>$" . $row["price"]. "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No available flights.</p>";
    }

    $conn->close();
    ?>
</div>



</body>
</html>
