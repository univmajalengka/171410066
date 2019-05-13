<?php
include "config/conection.php";

    $id = $_POST['id'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    $barang = $_POST['barang'];
    $kategori = $_POST['kategori'];
        
        $update = mysqli_query($connect_db,"UPDATE barang SET nama_kategori = '$kategori', nama_barang = '$barang', harga = '$harga', stock = '$stock', WHERE id = '$id'");
     
      if ($update){
        header('location:editbarang.php');
      }else{
        echo 'gagal menyimpan data';
        echo '<a href=editbarang.php>';
      }
?>