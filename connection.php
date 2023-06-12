<?php
    $hostname='localhost';
    $username="root";
    $password="";
    $dbname="test";

    $con=mysqli_connect($hostname,$username,$password,$dbname);

    if(!$con){
        echo "error".mysqli_connect_error();
    }
?>
