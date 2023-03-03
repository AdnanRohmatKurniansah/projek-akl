<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
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
      outline-color: #03b6fc;
    }
    div {
      width: 100%;
      height: auto;
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
        <h1>Tambah Foto</h1>
      <center>
      <form method="POST" action="proses_tambahgaleri.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>Judul</label>
         <input type="text" name="judul" required="" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="nama_file" required="" />
        </div>
        <div>
         <button type="submit">Simpan Foto</button>
        </div>
        </section>
      </form>
  </body>
</html>