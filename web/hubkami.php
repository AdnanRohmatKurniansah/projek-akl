<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="hubkami.css" rel="stylesheet">
  <title>Document</title>
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
            <a class="nav-link active" aria-current="page" href="hubkami.php">Hubungi Kami</a>
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
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3><b>Hubungi Kami</b></h3>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55715</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>atnan@g.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+999 999 99</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          
          <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=smk%20n%201%20bantul+(smk%20n%201%20bantul)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="350" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
        </div>
        
        <div class="col-lg-6">
          <form action="proses_tambahkomentar.php" method="POST" class="php-email-form" enctype="multipart/form-data">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="your_name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="your_email" id="email" placeholder="Your Email" required="">
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="your_message" rows="5" placeholder="Message" required=""></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
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
            Designed by <a href="#" style="background-color: rgb(26, 25, 25);">Team Sayid</a>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<!-- ======= Footer ======= -->
<div id="preloader">
  <div class="line"></div>
</div>

<script src="hubkami.js"></script>
</body>
</html>