<?php
include 'config/conection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect_db,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;

if ($cek == ""){
       	echo "Daftar heula euy";
      }else{
        header('location:home.php');
      }
?>