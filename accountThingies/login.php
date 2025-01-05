<?php
if(isset($_SESSION['emailg'])){

}else{
    header("location:accountThingies/registering.php");
}
?>
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
    h1:hover{
        display: inline;
       background-color: silver;
       transition: all 0.3s;
       padding: 10px;
    } 
   
</style>
<body style="background-color:gray;">



</body>
</html>
<?php

include "dbstuff/dbconn.php";