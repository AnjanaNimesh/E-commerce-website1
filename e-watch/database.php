<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'e_watch';

    $con = new mysqli($server,$username,$password,$database);

    if($con->connect_error==true){
        die("connection faild".$con->connect_error);
    }

?>

