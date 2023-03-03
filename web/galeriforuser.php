<!DOCTYPE html>
<head>
<title>Galeri</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- library CSS fancybox -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="fasilitas.css">
<!-- library JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- library JS fancybox -->
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>

<style type="text/css">
h3 {
    padding-bottom: 10px;
    margin-top: 130px;
    margin-bottom: 30px;
    border-bottom: 4px solid orange;
}
.gallery .isi img {
    width: 24.7%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
    padding: 2px;
}
@media screen and (max-width: 600px) {
  .gallery .isi img {
    display: block;
    width: 100%;
  }
}

@media screen and (max-width: 1150px) {
  .gallery .isi img {
    min-width: 32.5%;
  }
}

</style>
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
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Siswa
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="siswaxforuser.php">Kelas X</a></li>
            <li><a class="dropdown-item" href="siswaxiforuser.php">Kelas XI</a></li>
            <li><a class="dropdown-item" href="siswaxiiforuser.php">Kelas XII</a></li>
          </ul>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <!-- NAVBAR DROPDOWN -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="guruforuser.php">Guru</a></li>
              <li><a class="dropdown-item" href="fasilitas.html">Fasilitas</a></li>
              <li><a class="dropdown-item active" href="galeriforuser.php">Galeri</a></li>
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
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=735461323279579";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
	<h3><b>GALERI JURUSAN</b></h3>
    <div class="gallery">
      <div class="isi">
        <?php
        //Menyertakan file konfigurasi database
        include('admin/koneksi.php');

      $query = "SELECT * FROM gambar ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
            <a href="admin/imgGaleri/<?php echo $row['nama_file']; ?>"  data-fancybox="group" data-caption="<?php echo $row["judul"]; ?>" >
            <img src="admin/imgGaleri/<?php echo $row['nama_file']; ?>" style="height: 200px;">
            </a>
        <?php }
         ?>
               </div>
    </div>
</div>
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
            Designed by <a href="#" style="background-color: rgb(26, 25, 25); color: orange; text-decoration: none;">Team Sayid</a>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<div id="preloader">
  <div class="line"></div>
</div>

<script src="fasilitas.js"></script>
</body>
</html>
