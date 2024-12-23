<?php
$server="localhost";
$user="root";
$pass="";
$dbName="phantomphpgroup";

$conn= new mysqli($server,$user,$pass,$dbName);

if($conn->connect_error){
    die ("connection failed: ".$conn->connect_error);
}


