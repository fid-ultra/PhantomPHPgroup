<?php
include "dbconn.php";
header("location:../accountThingies/registering.php");
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$_SESSION['emailg']=$email;
$phonenumber=$_POST['PhoneNumber'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$password=$_POST['password'];


//registering.php saving to db is here...
$sql = "INSERT INTO phantomphp (name, surname, email, number, age, password,gender) 
        VALUES ('$name', '$surname', '$email', $phonenumber, $age, '$password','$gender')";
    if ($conn->query($sql) === TRUE)
    echo "1 row added";
 else
     echo "0 row added";
    

header("location:../booknow3.php");
//registering.php saving to db is here....

