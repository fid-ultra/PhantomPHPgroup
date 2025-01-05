
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Time</title>
</head>
<style>
    a{
        text-decoration: none;
    }
    #gohomeh1:hover{
        display: inline;
       background-color: silver;
       transition: all 0.3s;
    }
    #aboutuspara{
 margin-top: 10%;
  font-size: 300%;
  color:darkblue;
    }


</style>
<body style="background-color:gray;">

<h1 id="gohomeh1" style="color:darkblue;display:inline;"><a href="Home.php">PHantom Airlines</a></h1>

<h3 id="aboutuspara">PhantomPHP is a dedicated platform designed to simplify the flight booking experience for travelers worldwide. Established by a team of five passionate professionals, our mission is to provide a seamless, user-friendly solution for booking flights to destinations across the globe. Our team combines expertise in technology and travel to ensure that every user enjoys a hassle-free experience. At PhantomPHP, we are committed to innovation, excellence, and making your journey unforgettable.</h3>
</body>
</html>
<?php
session_start();
include "dbstuff/dbconn.php";