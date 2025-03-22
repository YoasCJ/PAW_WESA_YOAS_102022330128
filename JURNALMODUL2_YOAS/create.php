<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $judul = $_POST["Judul"];
    $penulis = $_POST["Penulis"]
    $tahun_terbit = $_POST["Tahun Terbit"]



    // Definisikan query untuk insert data
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit)"
    VALUES  ('$judul', '$penulis', '$tahun_terbit');
    mysqli_query($conn, $query)
    

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>