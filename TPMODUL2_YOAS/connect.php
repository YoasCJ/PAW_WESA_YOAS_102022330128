<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_perusahaan";

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "db_perpustakaan");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
 