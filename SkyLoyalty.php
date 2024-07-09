<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyAfrica - About Us</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="SkyLoyalty Styles.css">
</head>

<?php
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <!-- SkyLoyalty Content -->
    <div class="container">
        <h1>SkyLoyalty</h1>

        <!-- Overview Section Content -->
        <div class="overview-section">
            <h2>SkyMiles Overview</h2>
            <p>Join FlyAfrica's SkyLoyalty and enjoy exclusive
                benefits and rewards when you fly with
                FlyAfrica
            </p>
        </div>

        <!-- Benefits Section Content -->
        <div class="benefits-section">
            <h2>SkyMiles Benefits</h2>
            <ul>
                <li>Earn Miles on every Flight</li>
                <li>Access to exclusive promotions and discounts</li>
                <li>Priority boarding</li>
                <li>Complimentary upgrades</li>
                <li>Free checked baggage</li>
            </ul>
        </div>

        <!-- SkyMiles Tiers Section Content  -->
        <div class="tiers-section">
            <h2>SkyMiles Tiers</h2>
            <p>Our Loyalty Programme offers three tiers:
                Eagle, Vulture, and Hawk.
            </p>
        </div>

        <!-- Join SkyMiles Section Content -->
        <div class="join-section">
            <p>Ready to start earning exclusive
                benefits with us?
            </p>
            <a href="Join SkyMiles.php" class="join-button">Join SkyMiles</a>
        </div>
        
    </div>
</body>
</html>