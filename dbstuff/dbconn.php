<?php
$server="localhost";
$user="root";
$pass="";
$dbName="phantomphpgroup";

$conn= new mysqli($server,$user,$pass,$dbName);

if($conn->connect_error){
    
    die ("connection failed: ".$conn->connect_error);
    
}else{
    $log=  "login success on".date('Y-m-d H:i:s', strtotime('+2 hours'));

    
file_put_contents('logger.json', json_encode($log));

}


