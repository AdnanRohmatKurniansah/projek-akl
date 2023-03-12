<?php
include 'koneksi.php';
$id = $_GET["id"];

// ambil nama file gambar dari database
$query_select = "SELECT foto FROM siswax WHERE id='$id'";
$hasil_select = mysqli_query($koneksi, $query_select);
$data = mysqli_fetch_assoc($hasil_select);
$nama_file = $data['foto'];

// hapus data dan file gambar
$query_delete = "DELETE FROM siswax WHERE id='$id'";
$hasil_delete = mysqli_query($koneksi, $query_delete);
if(!$hasil_delete) {
    die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
} else {
    unlink("imgStudent/".$nama_file); // hapus file gambar dari direktori
    echo "<script>alert('Data berhasil dihapus.');window.location='siswax.php';</script>";
}

    ?>