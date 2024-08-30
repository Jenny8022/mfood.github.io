<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "login_lab_db";
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) ){
        die("fail to connect");
    }
?>
