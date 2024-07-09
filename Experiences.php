<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyAfrica - About Us</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="Experiences Styles.css">
</head>

<?php 
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <div class="container">
        <h1>Discover Your Next Experience</h1>
        <p>Explore the unique experiences we offer to 
            make your journey unforgettable.
        </p>
    

        <!-- Grid for Experiences -->
        <div class="experience-grid">
            <!-- First Class Experience -->
            <div class="experience">
                <img src="images/First Class Experience.jpg" alt="First Class Experience">
                <h2>First Class Experience</h2>
                <p>Experience true luxury with your own private
                hotel and lounge access.
                </p>
            </div>

            <!-- Chauffeur Service -->
            <div class="experience">
                <img src="images/Mercedes Taxi.jpg" alt="Chauffeur Services">
                <h2>Arrive in Comfort</h2>
                <p>When you arrive at your destination,
                    get premium taxi services to your
                    hotel.
                </p>
            </div>
        </div>
    </div>

</body>
</html>
