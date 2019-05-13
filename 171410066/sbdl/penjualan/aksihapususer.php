<?php
include "config/conection.php";
    mysqli_query($connect_db,"DELETE FROM user WHERE id = '$_GET[id]'");
    header('location:user.php');
?>