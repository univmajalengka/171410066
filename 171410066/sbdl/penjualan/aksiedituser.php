<?php
include "config/conection.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
        
        $update = mysqli_query($connect_db,"UPDATE users SET id = '$id', nama = '$nama', username = '$username', alamat = '$alamat', WHERE id = '$id'");
     
      if ($update){
        header('location:useredit.php');
      }else{
        echo 'gagal menyimpan data';
        echo '<a href=useredit.php>';
      }
?>