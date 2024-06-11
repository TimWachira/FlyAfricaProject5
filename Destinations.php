<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Flight - FlyAfrica</title>
    <link rel="stylesheet" href="Destinations Styles.css">
    <link rel="icon" href="images/icons8-airplane-48.png">
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
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>

    <!-- Creating the Container for Device View -->
    <div class="container">
        <h1>Book a Flight</h1>

        <!-- Using Dropdown to help Pass select Airport Dep and Arrival -->
        <form action="#">
            <label for="from">From</label>
            <select id="from" name="from">
                <option value=""disabled selected>Select Departure City</option>
                option value="Nairobi">Jomo Kenyatta Int'l Airport (NBO)</option>
                <optgroup label="Europe">
                    <option value="LHR">London Heathrow Airport (LHR)</option>
                    <option value="CDG">Paris Charles de Gaulle Airport (CDG)</option>
                    <option value="FRA">Frankfurt Airport (FRA)</option>
                    <option value="BRU">Brussels Airport (BRU)</option>
                    <option value="BER">Berlin Bradenburg Airport (BER)</option>

                    </optgroup>
                </select>

                <!-- Date and Calender Selection  -->

                <label for="Select Departure-Date">Departure-Date</label>
                <input type="date" id="Departure-Date" name="Departure-Date">

                <label for="Select Return-Date">Return-Date</label>
                <input type="date" id="Return-Date" name="Return-Date">

                <label for="Passengers">Passengers</label>

                <!-- DropDown and Option to aid in knowing how many pass are on board -->
                <select name="Passengers" id="Passengers">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

               <br><br><button class="Done">Search Flights
               </button>
            
        </form>
    </div>
</body>

</html>