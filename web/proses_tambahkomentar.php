<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $your_name    = $_POST['your_name'];
  $your_email    = $_POST['your_email'];
  $your_message    = $_POST['your_message'];

//cek dulu jika ada gambar produk jalankan coding ini
if("") {
  
                  $query = "INSERT INTO komentar ( your_name, your_email, your_message) VALUES ('$your_name', '$your_email', '$your_message')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='hubkami.php';</script>";
                  }

      
} else {
   $query = "INSERT INTO komentar (your_name, your_email, your_message) VALUES ('$your_name', '$your_email', '$your_message')";
                  $result = mysqli_query($koneksi, $query);
                  // periksa query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Komentar berhasil ditambah.');window.location='hubkami.php';</script>";
                  }
}

 

