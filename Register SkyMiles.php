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
        <form action="Register.php" method="post">
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
            <button type = 'submit'> <a href="Register.php" class="button">Register</a>
            </div>
        </form>
    </div>
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
            
            // Taking all 3 values from the form data(input)
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            // Performing insert query execution
            // Here, specify the columns explicitly
            $sql = "INSERT INTO users (username, password, email) VALUES ('$user_name', '$password', '$email')";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>Data stored in the database successfully.</h3>"; 
                echo nl2br("Username: $user_name\nPassword: $password\nEmail: $email");
            } else{
                echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
        }
        ?>
    
</body>
</html>