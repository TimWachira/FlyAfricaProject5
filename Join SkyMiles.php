<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="Join SkyMiles Styles.css">
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
        <h2>Login</h2>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="link">
            <p>New to SkyMiles? <a href="Register SkyMiles.php">Register</a></p>
        </div>
    </div>
</body>
</html>
