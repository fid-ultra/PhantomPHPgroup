
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
    input:hover{
      background-color: aqua;
      padding: 5px;
      font-size: large;
    }
    table{
        width: 30%;
        height: 300px;

    }
</style>
<body style="background-color:gray;">

<h1 style="color:darkblue;display:inline;"><a href="Home.php">PHantom Airlines</a></h1>

<table border="4">
    <tr>
<form method="post" action="booknow2.php">
    <br>
  <td> First Name: <input type="text" name="name" required ></td>
    <br>
    <br>
    </tr>
    <td>Sur Name: <input type="text" name="surname"required></td>
    <br>
    <br>
    <tr><td>Email: <input type="email" name="email" required></td>
    <br>
   
</tr> <br>
  <tr><td> Number: <input type="phone" name="PhoneNumber" required></td></tr>    <br>
    <br>
   <tr><td>Password: <input type="password" name="password" required></td></tr>
    <br>
    <br>
    <tr><td><input type="submit" value="Register"></td></tr>
</form>
</table>
</body>
</html>
<?php
session_start();
include "dbstuff/dbconn.php";