<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM guru WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='guru.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='guru.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Admin</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: darkblue;
      }
    button {
          background-color: #03b6fc;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: darkblue;
    }
    div {
      width: 100%;
      height: auto;
    }
    textarea {
      background: #f8f8f8;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Data Guru <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="proses_editguru.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Foto</label>
          <img src="images/<?php echo $data['foto']; ?>" style="width: 80px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
          <label>Nama</label>
         <input type="text" name="nama" required="" value="<?php echo $data['nama']; ?>"/>
        </div>
        <div>
          <label>No Hp</label>
         <input type="text" name="nohp" required="" value="<?php echo $data['nohp']; ?>"/>
        </div>
        <div>
          <label>Alamat</label>
          <textarea style="width: 100%; height: 100px; " name="alamat" required="" ><?php echo $data['alamat']; ?></textarea>
        </div>
        <div>
          <label>Pendidikan</label>
          <textarea style="width: 100%; height: 100px;" name="pendidikan" required="" ><?php echo $data['pendidikan']; ?></textarea>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>