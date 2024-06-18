<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="images/icons8-airplane-48.png">
    <link rel="stylesheet" href="LogIn Styles.css">
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

    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection details
            $servername = "localhost"; 
            $username = "root"; 
            $password = "";  
            $database = "flights"; 

            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            // Taking input values from the form
            $user_name = $_POST['username'];
            $password = $_POST['password'];

            // Checking if the user exists in the database
            $sql = "SELECT * FROM users WHERE username = '$user_name' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<h3>Welcome, $user_name!</h3>";
            } else{
                echo "<h3>Not a verified customer</h3>";
            }

            // Close connection
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
