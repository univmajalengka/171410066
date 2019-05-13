<?php
include "config/conection.php";

    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO user(nama,username,password,alamat) VALUES ('$nama','$username','$password','$alamat')";
    $input = mysqli_query($connect_db,$query);

    header("location:user.php");
?>