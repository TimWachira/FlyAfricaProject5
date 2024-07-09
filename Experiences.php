<?php 
    include_once("Template/Header.php");
    include_once("Template/Nav.php");
    require("Template/DbConn.php");
    ?>

    <div class="container">
        <h1>Discover Your Next Experience</h1>
        <p>Explore the unique experiences we offer to 
            make your journey unforgettable.
        </p>
    

        <!-- Grid for Experiences -->
        <div class="experience-grid">
            <!-- First Class Experience -->
            <div class="experience">
                <img src="images/First Class Experience.jpg" alt="First Class Experience">
                <h2>First Class Experience</h2>
                <p>Experience true luxury with your own private
                hotel and lounge access.
                </p>
            </div>

            <!-- Chauffeur Service -->
            <div class="experience">
                <img src="images/Mercedes Taxi.jpg" alt="Chauffeur Services">
                <h2>Arrive in Comfort</h2>
                <p>When you arrive at your destination,
                    get premium taxi services to your
                    hotel.
                </p>
            </div>
        </div>
    </div>

</body>
</html>
