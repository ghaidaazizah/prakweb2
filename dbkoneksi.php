<?php
// konfigurasi database
$host = "localhost";
$dbname = "dbkoperasi";
$username = "root";
$password = "";

// buat koneksi PDO
// menggunakan try catch

try {
    // buat objek koneksi PDO yang di dalamnya ada parameter host dll
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// set attribute mengatur mode kesalahan
// echo "<h1>database berhasil terhubung</h1>"; (ini caranya)

} catch (PDOException $e) {
    echo "databae tidak terhubung : " .$e->getMessage();
}
?>