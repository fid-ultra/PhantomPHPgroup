<!DOCTYPE html>
<?php
include "../dbstuff/dbconn.php";
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering page</title>
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
    #infocheckingh1{
      
      margin-bottom: 0;  /* Removes the bottom margin */
    }
    
    table{
        
        margin-top: 0;
        width: 30%;
        height: 300px;

    }
    input:hover{
      background-color: aqua;
      padding: 5px;
      font-size: large;
    }
</style>

<body style="background-color:gray;">

<h1 id="gohomeh1" style="color:darkblue;display:inline;"><a href="Home.php">PHantom Airlines</a></h1>

<h1 id="infocheckingh1">Please Register :</h1>
<table border="4">
    <tr>
<form method="post" >
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
    <tr><td><input type="submit" value="Register" >

</form>

</table>
<p><a href="login.php">Already have an account ? try loging in instead (click me)</a></p>
</body>
</html>
<?php

