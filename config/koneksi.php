<?php

    $hostname   ="localhost";
    $username   ="root";
    $password   ="";
    $database   ="form";

    $sambung    =mysqli_connect($hostname,$username,$password,$database);
    if(!$sambung){
        die("terjadi kesalahan".mysqli_connect_error());
    }
?>