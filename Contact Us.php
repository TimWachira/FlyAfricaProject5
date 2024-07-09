<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyAfrica - About Us</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="ContactUs Styles.css">
</head>

<?php 
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <!-- Contact Page Details -->
    <div class="container">
        <h1>Contact FlyAfrica</h1>
        <p>Have a question or feedback? Get in touch with us using the form below.</p>

        <!-- Contact Form -->
        <form action="Contact Us.php" method="post">
            <label for="name">Your Name: </label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email: </label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message: </label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" name="submit" value="Send Message">
        </form>
        
        <?php

        // Checks if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
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

            // Prepares to Fetch User Info and Insert into Database//
            $stmt = $conn->prepare("INSERT INTO Contacts (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);

            // Set parameters and execute
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $stmt->execute();

            // Close statement and connection
            $stmt->close();
            $conn->close();

            // Provide feedback to the user
            echo "<p>Thankyou! Your Message has been sent successfully!</p>";
        } 
        ?>
    </div>
</body>
</html>
