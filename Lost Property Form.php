<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Africa Lost Property Form</title>
    <link rel="stylesheet" href="Lost Property Form Styles.css">
    <link rel="icon" href="images/icons8-airplane-48.png">
</head>
<body>
<!-- Navigation List -->
 <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About Us.php">About Us</a></li>
            <li><a href="destinations.php">Destinations</a></li>
            <li><a href="SkyLoyalty.php">SkyLoyalty</a></li>
            <li><a href="Experiences.php">Experiences</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>

    <!-- Property Form -->
    <div class="container">
        <h2>Fly Africa Lost Property Form</h2>
        <form action="/submit-lost-property" method="post">
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
</body>
</html>
