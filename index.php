<?php
session_start();
include('koneksi.php');
include('konten/header.html');

if (empty($_SESSION['user'])) {
  include('konten/login.php');
} else {
  include('konten/nav.html'); ?>

    <div id="wrapper">

      <?php include('konten/sidebar.html');?>

      <div id="content-wrapper">
        <div class="container-fluid">
          
          <?php include('atur_konten.php'); ?>
        
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php } ?>

<?php
include('konten/footer.html'); ?>