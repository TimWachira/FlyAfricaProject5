<?php 
    include_once("Template/Header.php");
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    
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
