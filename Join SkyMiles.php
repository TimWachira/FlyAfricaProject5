<?php 
    include_once("Template/Header.php");
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
            <button type = 'submit'> <a href="LogIn.php" class="button">Login</a>
            </div>
        </form>
        <div class="link">
            <p>New to SkyMiles? <a href="Register.php">Register</a></p>
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
