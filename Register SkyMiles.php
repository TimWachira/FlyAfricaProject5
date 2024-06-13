<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="Register SkyMiles Styles.css">
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

    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="post">
            <div class="form-group">
                <label for="new-username">Username</label>
                <input type="text" id="new-username" name="new-username" required>
            </div>
            <div class="form-group">
                <label for="new-password">Password</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
