<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href=".css"> 
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="About Us.php">About Us</a></li>
      <li><a href="Destinations.php">Destinations</a></li>
      <li><a href="SkyLoyalty.php">SkyLoyalty</a></li>
      <li><a href="Experiences.php">Experiences</a></li>
      <li><a href="Contact Us.php">Contact Us</a></li>
      <li><a href="FAQ.php">FAQ</a></li>
      <li><a href="view_users.php">View Users</a></li>
    </ul>
  </nav>

  <div class="container">
    <h2>Users</h2>

    <?php
      // Database connection 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "flights";

      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection
      if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // SQL query to Get users from database and Read
      $sql = "SELECT id, username, email FROM users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<table>";
          echo "<tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>";

        // Loop through each user record
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>
                  <a href='edit_user.php?id=" . $row["id"] . "'>Edit</a> / 
                  <a href='delete_user.php?id=" . $row["id"] . "' onclick='return confirmDelete()'>Delete</a>
                </td>
              </tr>";
        }
        echo "</table>";
      } else {
        echo "No users found.";
      }

      $conn->close();
    ?>

  </div>
</body>
</html>
