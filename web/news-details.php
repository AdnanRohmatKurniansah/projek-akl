<?php 
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="haldepan.css">
    <!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, .75);">
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
            <a class="nav-link active" aria-current="page" href="haldepan.php">Home</a>
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
            <li><a class="dropdown-item" href="siswaxiforuser">Kelas XI</a></li>
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
    <!-- Page Content -->
    <div class="container" >


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8" style="min-width: 100%; margin-bottom: 50px;">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($koneksi,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" style="min-width: 100%;" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        
      </div>

      </div>
    </div>
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
                  Designed by <a href="">Team Sayid</a>
            </div>
          </div>
        </div>
      </footer><!-- End Footer -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<!-- Slick JS -->    
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>        
<div id="preloader">
   <div class="line"></div>
</div>
<script src="haldepan.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>AOS.init();</script>
  
    

  </body>

</html>
