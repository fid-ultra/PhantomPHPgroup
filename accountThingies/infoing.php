<?php
session_start();
// Global variables 5 variables
$_SESSION['globalname']=$_POST['name'];
$_SESSION['globalsurname']=$_POST['surname'];
$_SESSION['globalemail']=$_POST['email'];
$_SESSION['globalphonenumber']=$_POST['PhoneNumber'];
$_SESSION['globalpassword']=$_POST['password'];

if(isset($_SESSION['globalname'])){
    $sql = "insert into phantomphp values(" . $_SESSION['globalname'] . ",'". $t2 . "',". $t3 . ",'". $t4 . "')";

    if ($conn->query($sql) === TRUE)
        echo "1 row added";
     else
         echo "0 row added";

}
?>