<?php 
    include_once("Template/Header.php");
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <!-- Property Form -->
    <div class="container">
        <h2>Fly Africa Lost Property Form</h2>
        <form action="Lost Property Form.php" method="post">
            <!-- Personal Information -->
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <!-- Flight Details -->
            <div class="form-group">
                <label for="flight-number">Flight Number</label>
                <input type="text" id="flight-number" name="flight-number" required>
            </div>
            <div class="form-group">
                <label for="departure-date">Departure Date</label>
                <input type="date" id="departure-date" name="departure-date" required>
            </div>
            <div class="form-group">
                <label for="departure-airport">Departure Airport</label>
                <input type="text" id="departure-airport" name="departure-airport" required>
            </div>
            <div class="form-group">
                <label for="arrival-airport">Arrival Airport</label>
                <input type="text" id="arrival-airport" name="arrival-airport" required>
            </div>

            <!-- Lost Item Details -->
            <div class="form-group">
                <label for="item-description">Description of Lost Item</label>
                <textarea id="item-description" name="item-description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="last-seen">Where and When Last Seen</label>
                <textarea id="last-seen" name="last-seen" rows="3" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieves form data
    $full_name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $flight_number = $_POST['flight-number'];
    $departure_date = $_POST['departure-date'];
    $departure_airport = $_POST['departure-airport'];
    $arrival_airport = $_POST['arrival-airport'];
    $item_description = $_POST['item-description'];
    $last_seen = $_POST['last-seen'];

    
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $dbname = "flights";

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO LostItems (full_name, email, phone, flight_number, departure_date, departure_airport, arrival_airport, item_description, last_seen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $full_name, $email, $phone, $flight_number, $departure_date, $departure_airport, $arrival_airport, $item_description, $last_seen);

    // Executes SQL statement
    if ($stmt->execute()) {
        echo '<p style="color: green;">Lost item report submitted successfully!</p>';
    } else {
        echo '<p style="color: red;">Error: ' . $stmt->error . '</p>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
