<?php
  include('koneksi.php');
 //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>Akuntansi | Dashboard</title>
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        margin-top: 100px;
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
  <div id="wrapper">

<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="#" class="logo"><span>NP<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
        <!-- Image logo -->
        <!--<a href="index.html" class="logo">-->
            <!--<span>-->
                <!--<img src="assets/images/logo.png" alt="" height="30">-->
            <!--</span>-->
            <!--<i>-->
                <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
            <!--</i>-->
        <!--</a>-->
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
<?php include('includes/topheader.php');?>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content" style="overflow: auto;">    
    <center><h1>Data Siswa Kelas X</h1><center>
  <div class="add">
  <center><a href="tambah_siswax.php">+ &nbsp; Tambah Data</a><center></div>
    <br>
    <form method="POST" class="d-flex" role="search" style="width: 50%; ">
        <input  type="text"  name="t_cari" value="<?= @$_POST['t_cari'] ?>"  class="form-control me-2" placeholder="Masukkan Nama Siswa">
        <button class="btn btn-primary" name="b_cari" type="submit">Cari</button>
        <button class="btn btn-danger" name="b_reset" type="submit">Reset</button>
      </form>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>Action</th>
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
          <td style="text-align: center;"><img src="imgStudent/<?php echo $data['foto']; ?>" style="width: 100px; height: 100px;"></td>
          <td><?php echo $data['nis']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['kelas']; ?></td>
          <td><textarea style="width: 100%; height: 100px; border-left: none; border-right: none; border-top: none; border-bottom: none; outline: none; resize: none; " name="alamat" disabled><?php echo $data['alamat']; ?></textarea></td>
          <td>
              <a href="edit_siswax.php?id=<?php echo $data['id']; ?>" style="background-color: green; color: #fff;
          padding: 10px; text-decoration: none; font-size: 12px;">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" style="background-color: red; color: #fff;
          padding: 10px; text-decoration: none; font-size: 12px;">Hapus</a>
          </td>
      </tr>

      
      
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      ?>
      <?php endwhile;  ?>
    </tbody>
    </table>
    <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
        <?php include('includes/footer.php');?>


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </body>
</html>                   
                    

                    



    

    






