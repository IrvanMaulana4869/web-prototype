<!-- file konfigurasi database -->
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "uas_18111167";

try {    
    //buat koneksi PDO 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //Tampilkan error bila terjadi
    die("Terjadi masalah: " . $e->getMessage());
}