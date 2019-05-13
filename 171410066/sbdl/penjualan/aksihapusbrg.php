<?php
include "config/conection.php";
    mysqli_query($connect_db,"DELETE FROM barang WHERE id = '$_GET[id]'");
    header('location:barang.php');
?>