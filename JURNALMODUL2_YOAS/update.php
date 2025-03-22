<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST[' '])) {
    $id = $_GET[' '];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun terbit'];    


    // Buatlah query untuk update data
    $query = "UPDATE tb_buku SET
            judul = 'Judul',
            penulis = 'Penulis,
            tahun = 'tahun terbit'
            WHERE id=$id"
    

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>