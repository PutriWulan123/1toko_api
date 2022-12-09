<?php
// Membuat variabel, ubah sesuai dengan nama host dan database pada hosting 
$host = "localhost:3307";
$user = "root";
$pass = "";
$db   = "toko_api";
 
//Menggunakan objek mysqli untuk membuat koneksi dan menyimpan nya dalam variabel $mysqli 
$mysqli = new mysqli($host, $user, $pass, $db);
 
?>