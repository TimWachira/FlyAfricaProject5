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
                <option value="" disabled selected>Select Departure City</option>
                <option value="Nairobi">Jomo Kenyatta Int'l Airport (NBO)</option>
                <optgroup label="Africa">
                    <option value="NBO">Jomo Kenyatta Int'l Airport</option>
                </optgroup>
                <optgroup label="Europe">
                    <option value="LHR">London Heathrow Airport (LHR)</option>
                    <option value="CDG">Paris Charles de Gaulle Airport (CDG)</option>
                    <option value="FRA">Frankfurt Airport (FRA)</option>
                    <option value="BRU">Brussels Airport (BRU)</option>
                    <option value="BER">Berlin Bradenburg Airport (BER)</option>
                </optgroup>
            </select>
            <label for="to">To</label>
            <select id="to" name="to">
                <option value="" disabled selected>Select Arrival City</option>
                <optgroup label="Africa">
                    <option value="NBO">Jomo Kenyatta Int'l Airport</option>
                </optgroup>
                <optgroup label="Europe">
                    <option value="MIL">Milano Int'l Airlport</option>
                    <option value="AMS">Amsterdam Schipol Airport</option>
                    <option value="OYD">Chicago O'Hare Airport</option>
                    <option value="YYD">Toronto Pearson Int'l Airport</option>
                </optgroup>
            </select>

            <!-- Date and Calendar Selection  -->
            <label for="Departure-Date">Departure Date</label>
            <input type="date" id="Departure-Date" name="Departure-Date">

            <label for="Return-Date">Return Date</label>
            <input type="date" id="Return-Date" name="Return-Date">

            <label for="Passengers">Passengers</label>

            <!-- Dropdown for number of passengers -->
            <select name="Passengers" id="Passengers">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

            <!-- Search Flights button -->
            <br><br>
            <button type = 'submit'> <a href="Search Flights.php" class="button">Search Flights</a>
        </form>
    </div>
</body>
</html>
