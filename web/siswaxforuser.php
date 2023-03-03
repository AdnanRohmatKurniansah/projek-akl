<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="fasilitas.css">
    <title>Kelas X</title>
    
</head>
<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgba(0, 0, 0, .75);">
    <div class="container">
      <a class="navbar-brand" href="haldepan.php">
        <img src="images/akl.png" width="90" height="60">AKUNTANSI
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" id="offcanvasExample" style="background-color: gray;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="haldepan.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="haldepan.php">Visi Misi</a>
          </li>
           <!-- NAVBAR DROPDOWN -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Siswa
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="siswaxforuser.php">Kelas X</a></li>
            <li><a class="dropdown-item" href="siswaxiforuser.php">Kelas XI</a></li>
            <li><a class="dropdown-item" href="siswaxiiforuser.php">Kelas XII</a></li>
          </ul>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <!-- NAVBAR DROPDOWN -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="guruforuser.php">Guru</a></li>
              <li><a class="dropdown-item" href="fasilitas.html">Fasilitas</a></li>
              <li><a class="dropdown-item" href="galeriforuser.php">Galeri</a></li>
              <li><a class="dropdown-item" href="prestasiforuser.php">Prestasi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="hubkami.php">Hubungi Kami</a>
          </li>
          <li id="login" class="nav-item">
            <a class="nav-link" aria-current="page" href="admin/index.php">Login</a>
          </li>
        </ul>
        <!-- SEARCH -->
        
      </div>
    </div>
  </div>
  </nav>
  </nav>
  </nav>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
  <?php
  include('admin/koneksi.php');
 //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
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
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 90%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    .add a {
          background-color: #03b6fc;
          color: #fff;
          padding: 10px;
          border-radius: 5px;
          text-decoration: none;
          font-size: 15px;
    }
    </style>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Data Siswa Kelas X</h1><center>
  <div class="add">
    <br>
  <div class="col-md-6">
       <form method="POST">
        <div class="input-group mb-3">
          <input type="text" name="t_cari" value="<?= @$_POST['t_cari'] ?>" class="form-control" placeholder="Masukkan Nama Siswa">
          <button class="btn btn-primary" name="b_cari" type="submit">Cari</button>
          <button class="btn btn-danger" name="b_reset" type="submit">Reset</button>
        </div>
       </form>
    </div>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Alamat</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $no = 1;
    // cari data
    if (isset($_POST['b_cari'])) {
      $keyword = $_POST['t_cari'];
      $reset       = "SELECT * FROM siswax WHERE nis like '%$keyword%' or nama like '%$keyword%' or
      alamat like '%$keyword%' or kelas like '%$keyword%' order by nis asc";
    } else {
      $reset = "SELECT * FROM siswax order by nis asc";
    }
    $siswa = mysqli_query($koneksi, $reset);
    while ($data = mysqli_fetch_array($siswa)) :
    ?>
      
       <tr>
          <td><?php echo $no; ?></td>
          <td style="text-align: center;"><img src="admin/imgStudent/<?php echo $data['foto']; ?>" style="width: 80px;"></td>
          <td><?php echo $data['nis']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['kelas']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
      </tr>

      
      
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      ?>
      <?php endwhile;  ?>
    </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
      <footer id="footer">
        <div class="footer-top">
              <div class="container">
                <div class="copyright">
                  &copy; Copyright <strong><span>2022</span></strong>. Student XI RPL 1 All Rights Reserved
                </div>
                <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                  Designed by <a  href="#" style="background-color: rgb(26, 25, 25);  color: orange; text-decoration: none;">Team Sayid</a>
            </div>
          </div>
        </div>
      </footer><!-- End Footer -->
<div id="preloader">
   <div class="line"></div>
</div>
<script src="haldepan.js"></script>
</body>
</html>