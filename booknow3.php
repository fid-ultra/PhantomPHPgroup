
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


</style>
<body style="background-color:gray;">

<h1 id="gohomeh1" style="color:darkblue;display:inline;"><a href="Home.php">PHantom Airlines</a></h1>

<table border="4">
    <tr>
    <br>
  <td> First Name: <?php echo $_SESSION['globalname']; ?></td>
    <br>
    <br>
    </tr>
    <td>Sur Name: <?php echo $_SESSION['globalsurname'];?></td>
    <br>
    <br>
    <tr><td>Email:<?php echo $_SESSION['globalemail'];?></td>
    <br>
   
</tr> <br>
  <tr><td> Number: <?php echo $_SESSION['globalphonenumber'];?></td></tr>    <br>
    <br>
   <tr><td>Password: <?php echo $_SESSION['globalpassword'];?></td></tr>
    <br>
    <br>
    <tr><td><input type="button"></td></tr>
</form>
</table>
</body>
</html>
<?php
session_start();
include "dbstuff/dbconn.php";