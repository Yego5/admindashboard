<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="Classwork";

//database connection using mysql_connect
$conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn)
    {
        echo "Connection failed!";
    }
?>