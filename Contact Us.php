<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyAfrica - Contact Us</title>
    <link rel="stylesheet" href="ContactUs Styles.css">
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
            <li><a href="experiences.php">Experiences</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>

    <!-- Contact Page Details -->
    <div class="container">
        <h1>Contact FlyAfrica</h1>
        <p>Have a question or feedback? Get in touch with us using the forms below. 
        </p>

        <!--Contact Form  -->
        <form action="#" method="post">
            <label for="name">Your Name: </label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email: </label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message: </label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </div>
</body>
</html>