<?php 
    include_once("Template/Header.php");
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

<div class="container">
    <h2>Register</h2>
    <form action="Register.php" method="post">
        <label for="user_name">Username:</label>
        <input type="text" id="user_name" name="user_name" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>

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
        $sql = "INSERT INTO users (username, password, email) VALUES ('$user_name', '$password', '$email')";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for Registering
            Our Team will respond shortly to you via E-Mail.</h3>"; 
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    }
    ?>
</div>
</body>
</html>
