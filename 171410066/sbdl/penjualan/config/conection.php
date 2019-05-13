<?php
    $username = "root";
    $password = "";
    $database = "dbs_penjualan";
    $hostname = "localhost";
    
    $connect_db=mysqli_connect($hostname,$username,$password);
    $find_db=mysqli_select_db($connect_db,$database);
?>