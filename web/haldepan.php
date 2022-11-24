<?php 
include('admin/koneksi.php');
?>
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
    <link rel="stylesheet" href="haldepan.css">
    <title>Home</title>
    
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
            <a class="nav-link active" aria-current="page" href="haldepan.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#visimisi">Visi Misi</a>
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
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Picture3.png" class="ukuran" alt="...">
        <div class="carousel-caption">
          <h3 class="ml5">
            <span class="text-wrapper">
              <span class="line line1"></span>
              <span class="letters letters-left">Selamat Datang</span>
              
              <span class="letters letters-right" style="color: rgb(238, 255, 0);">di Akuntansi</span>
              <span class="line line2"></span>
            </span>
          </h3>
          
        </div>  
      </div>
      <div class="carousel-item">
        <img src="images/Picture13.png" class="ukuran" alt="..." style="width: 100%;">
        <div class="carousel-caption">
          
          </div>
        </div>
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="opacity: 0;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="opacity: 0;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        <div data-aos= "fade-zoom-in">
         <div class="visimisi" id="visimisi">
          <h3>Visi dan Misi</h3><br>
          <h5>Visi</h5>
          <p> Teknisi Akuntansi yang Kompeten dan berwawasan Global.
          </p>
          <h5>Misi</h5>
          <p> Menanamkan jiwa disiplin, tertib , berintegritas yang tinggi dan agamis guna menunjang Kinerja Teknisi Akuntansi<br>
              Membentuk tamatan yang berkepribadian kuat, memiliki pengetahuan dan ketrampilan Akuntansi sesuai dengan IAI (Ikatan Akuntan Indonesia) sebagai   bekal hidup mandiri.
            </p>
         </div>
        </div>
       <div class="container" >
        <div class="wrap">
          <div class="judul">
            <h5><b>BERITA TERBARU</b></h5>
          </div>
          <div class="badan">			
            <div class="sidebar">
              <div class="slider">
              <?php
     if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }
  $no_of_records_per_page = 8;
  $offset = ($pageno-1) * $no_of_records_per_page;


  $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
  $result = mysqli_query($koneksi,$total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($koneksi,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
   ?>
                          <div class="berita">
                          <div class="card mb-4">
 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Baca selengkapnya &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
                          </div>
                          <?php }
         ?>
                      </div>
                    
            </div>
            
          </div>
        </div>
      </div>
      <div class="container" data-aos= "fade-up">
        <div class="wrap1">
          <div class="judul1">
            <h5><b>HUBUNGI KAMI</b></h5>
          </div>
          <div class="line"></div>
          <div class="alamat">
            <p>Jl.Parangtritis KM 11 Sabdodadi Bantul Yogyakarta 55702<br>
              Email : example@gmail.com<br>
              Telp : 9999-999999 / 9999-9999999<br>
              Fax : 123456789 </p>
          </div>
          <div class="sosmed">
            <h5><b>SOSIAL MEDIA</b></h5>
          </div>
          <div class="line"></div>
          <div class="logomedsos d-flex justify-content-between">
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAACwUlEQVRYR+2W4ZHUMAyF7yoAKiBXAVABoQOogKUCoAKOCqADlgo4KiBXAVAB6QA6AH03eoxwZMeBPWZ/nGY0cRxZen6S5ZyeHJmcHhmekxtAaxnZwtBtczaY3jdlLIljzf3wAc/ZdFoDou89gEYzfuNgsuC9sQD13nTfWtACRPBXpi8SB2KAT3HMu0DXwAPoZbLuKkwL0Dv7vnMw7O6jUz/XnFV2DsOD6XNT0o3g71FmXwP02Iw/+ILX9ny7EUQF21XqxfgTG1+UhjVA33xX1Z3UIibz5zZ3z5Q0we5nZ4pU3+kF9NMN011sABOZhg38xTkA/VGDGUPkmV0gZ76rDANFuzO9azq6Yxj4akqKEWy++5g5WBpMyQBCHU3ReQaIIBQ0UkspoLFRkUafjL+YPvMnNigMwUYECUCBrwak6Ci+2RSGSsH5J3fMN4JM/hztOYQFDxxU6QPWAMaBOY8fMwZagHDC6SMwAgvaufxqPe+zabapgwGKwQCzL7fu77FwF2kxGwFSXf12kzEEhXTobHdqlumRLcCpdeh0xc8HA6QekgUpyVITzMAfDFBr1yUgscmJo7ivhaHWrktAFD+1dK0p21kA9ajeol4c7a1FvdaHVEcwkp2g0eZhhxbBwSBd1NFfp0yAaidpMM9q/QTBTr0IMDROzXN3TWUuA0NdjVE9pHW0CQoLgMuEQiYYQDPR5d0FiGA9lyuBYPOhs8IGZtNL071pmSYBi/4XfxNZYyT3uqH/9fcjY2dnkzoYi7+J//GDVoLiYh6dzcU91/MLm52kSmmsTse7MGsHzZ98NTaiUKT6BaVOtgg1M5g+NeXAIJMp5bCosxpDLKKWyLWcRBA9oFgvP3EtYGiqqY8WIDmBZm5/BdjCTrSFDdK0z5iRYQ8g2QJoNCUFtzagog3ABmlflS2AVp0dwuAG0BqLR8fQL3gouSU+EZgtAAAAAElFTkSuQmCC"/></a>
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAACNElEQVRYR+2YgVHDMAxF2w1gAsoGZQLCBjABZQJgAsoEwAR0A2ACugFlAroBbAB6nNNLFMeSY7jrcehO1zZ27OcvyTaMR1tm4y3jGf0ZoEqUxQ/Fd8QnQem1fNb+JN+XuRHIUYiJZ+Kn4lPnRB/S71r81tnfHTLUuMkA0fOj2qX4owXmUehCBrkKobHGs9pRa57qZAHdhzBZE+W0k1dHfS+kgFCGMOUaeYNPEi+SU4SwY31Ax9ITdUhkry2k4534OgDV7/Ut7EQ6dHIqBgTEs3hOJZ3FBg9ELO4hsipU3NXPY0C5oeqV3wCiuZPkMaA3I/56UfshTPo5SuNVCH8s9B2VNBBhevEmTQABqGm5IafilvUAGmguDew5XmMgXcJFIddAJB9J6DWqhGppWu7e1VqUBiJc3uoC4ieAWnmkgXIT+teB3mXVqc1wLe06ia3wstuTVynbCJMbsiFAVl62xtRA7NBVYilDgKw0WMl8B/WcGsiSdwjQpxGu1k6vgfrOnXpMKqJ5IL7KbwZs2kx+cLXFyEdrG2kdsqVHR2mVsUCKhM9viwGxQjY3j5UCuQ5XZGaDnDiISoA66vQpxPNKnIqzrATIfUGrIayKo99QoN47VOklfwjQQhbCfXqTyM0wWED0TSmVC4QyJHIUJpVDOnfIKY4Afc55gQBAFdRJmkeh5gAckufik/DQAgKEv0RQpleV3JDFVsTuOw0Nc9UB6D1x/tmw8oLUY+QqZCle3P4PZEn4BZIYfiW6nAo8AAAAAElFTkSuQmCC"/></a>
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAB9klEQVRYR+2WgU0DMQxF2w3YgLIBbFAmACagTABMAEwATECZADbgNgAm4EZgBP5Dlypck4t9PUSRzpIFal37+/vHyXSyZTbdMjyTEVBpIiNDf8HQvooey4/kM3klf5ffyT8jQDv6n1i+X1lqZASScFnqJvH9Qp/dysnRNsBcymv5aVPjUH/fSoAumqRnTlA08eRoAsYA+MNSDJGU5Bg/4Iclg5EXOSOw2LOCGONuU2M1yhQgEs+jrFB6Iq87KnnZIVUybwoQGmBsbbvRB9cZUGHMFnaIoTn0s9ZkChC0v3Zkhu57eRXF5JrIpck2l1uMD8q0MLRLh1CPhuaG+BCSPTApQAChCF17ijjwfGsSptesS0MoP7VPPIVzsS5AXoF6AdLonjze2qscOQ19KGLmrWSMrxTHCUtaDhDaYR/9hnWtj84HGsefrT0kU4zpQF57GSIeQIA5l8PYEJa8v+LEXQ80wKCloazIDoVKL0brgrSANl3UJUAU8l4LKXAsQXZP0SyAgp640XkFWp8YoThbn2Oe3DtthFZAbOyFHIGjLau5wJQ0BAiK41c9mKmaMZmYCR22GaI4mglA+txlAEDASyuNcVxuZNxnfcbz2ABxsWIBFGIQMiLm7RuzRkG8lvM25hShl43NKuqNC1kTjIBKTI0M/TuGvgClxFgleLUoLgAAAABJRU5ErkJggg=="/></a>
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAABlUlEQVRYR+1Xi23CMBCFCaAbhA1gA7pBuwEbABNAJ2g7Qdmg3QA2gA3IBtAJynvIrtxLHH9SrAj5JCtO7Ds/v3dxLv1ex6zfMTy9DMilSGbo7hgaYkcFGq9sNHk1n50NBnSfV90v0WezWl0OccEntJUC42I5ZvwAp3e0jXSuA/SKSYuYVSJ8vuDzbPpJQFMMbiMCt3GZwJmMXU0CIjNkKKW9YLG1DdAnBpg/Ke2PbJIhykXZfK3ExMJ3smUe5aJstZIdAxfghijzPNDPxMYj4eE/AelYzAMeFaHWCOiEaPrg8wksJR8rtmY+zsac3zgy4E9sIOE3xf1HgIxJAPH4IGM+ZgXUVjLKzTyiZFHSS8liAcUCqbxcEtA+gGYGoz/zJUQeKWGJB6MKMvUgFNBOAfLJE9ucxoOxc5+OtUrKNjsO9X2Dw9ImGV9TypbSHrEYpb9aXYGWUjZngaaB3rou4veLddAGzazDnX+uBRzYzMKefXnoDYTG3+peFvq64C8lkCbJUuZPZa385+qiPzOUGXIx4Bq/AEuuPiV0fmcCAAAAAElFTkSuQmCC"/></a>
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAACEklEQVRYR+2W7VHDMAyG2w1gg7BB2QAmACagTABMQJkAmIBuABuQETpCR2AE9HBWznbk2I3bXH9Ud7qm/pAfv5KdzGdHZvMj45mdgHIZOSnkKXQlzwvxjXir7VMrdCYLL8XvHQwcv+LnUwOhxo2DASq2TphDKtQ4AEBITcpI2eWhFGL3LP4mDpClRgz2Lg3P+wbKpYQ6eXWALxHRnfz/3geQVaBWWtZOgSf5jWEYfyG+rQHKqaGxqQ1UaV0KlwZtcMLoLy1q1GCHuQIlpqYHZbBP8VtLOgd77fcNAY0pUNSgQFGH+UMwcAQFnVKoNCX+xnxVeG7Ef9xvQpz/5qCgLaCVND663Q0F8vtQ5UF86xo59l8FMAwPCtoCIlAq3zGgFm13ZGUA6hKj5P4JLkQNbtUQQfFUAZOSD3Hyz7MaG6FmSmCYw0ZIWWC5U6Z3DXBAtuJatH4gvWNKYZjLlbDaFSgez4K+KvQDw6tiV+sVNAFyCg0tAhw3L0BjjE+OeHNVQKSQoz3GzIKuVagGqHch6q5qUraUIJyqMca9tbYm1gDFxcwC1ERJTfUuxH0otHJFTSxSwDEGiFQOXY6M6b6hY5VqFOKoo4YPo/E5gUABF1srDcEb3h9QC0Ss7vPTWNxXUbuTBc2AGiBjfbNp4dRqXK95IerMKYBYS19BPKNQ0qYCKlVzkpQVw0xVQyegnRTIDf4DR9paJbee/iYAAAAASUVORK5CYII="/></a>
            <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAB8klEQVRYR+2W4U0DMQyF2w1gg7IBTMCxAUxA2QAmoEwATEA3ACagTABMwG0ATADvQ5eT5SZNcuJHkc6SdSVx7Jfnl4TpZMtsumV4JiOgXEdGhkaGcgzk5v+lhhrt6lTOd6fzB30/5c/yZW7XNfObGKL4pfw8k/BV8yfytqZwKjYFaF8L7uWzwiKAOiiM3RgWAwQzT3JAWaPoSv4lP5Q33WQpQ+QLa5b6TcvXLAboWlG2TSw8k6MbaxRAW7fyNpbcjc319103Rot9vt8pD+hYY7QqGGD2UrspAGFDBgFaKANCDgYzy8rCqfBBgF6ULWgHdnYj2WkpOkuZvQrIZ83mbs1EfyB8y94VNOsCV/oeRaramBgotIFGsO9CdnscHtCH2b1NbPPmANkrgHzBLKv+hPWd8IBKWsZJCSyGYo0pfKPfFxFm5hqrPmX+yCePpymILqxWUgdhECCfPCVsSwDXBNdFsNQmBgEiqS+AJtg1X2towr91K43FDgLrwkXK70c5sWuWejpowcxFI/I3OazxdFDAxjAOGA88Vjc5lnpcG62AqU33jU96pYFFVfVChkIYYBD5PFMERgATfZtqAZb8x4hgeUSDcGlN23m4lf29Uoujjy8B5JPD3J8B8MmHABq8+5KFI6AcSyNDI0M5BnLzW6ehH5XpXiW6AV1XAAAAAElFTkSuQmCC"/></a>
          </div>
          <div class="agenda">
            <h5><b>AGENDA</b></h5>
          </div>
          <div class="line"></div>
          <div id="idx-calendar">
            <div id="calendar-control">
             <div id="monthNow">Januari 2014</div>
             <div id="nextMonth"></div>
             <div id="prevMonth"></div>
            </div>
            <div id="dayNames">
             <ul>
              <li>S</li>
              <li>M</li>
              <li>T</li>
              <li>W</li>
              <li>T</li>
              <li>F</li>
              <li>S</li>
             </ul>
            </div>
            <div id="daysNum">
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