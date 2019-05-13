<?php
include "config/conection.php";

    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $barang = $_POST["barang"];
    $kategori = $_POST["kategori"];

    $query = ("INSERT INTO barang (NULL, `kategoris`, `barang`, `harga`, `stok`)");
    $execute = mysqli_query($conection,$query);

    header("location:barang.php");
?>