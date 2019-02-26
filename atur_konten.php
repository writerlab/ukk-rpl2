<?php

if ($_GET['menu'] == 'home') {
  include('konten/home.php');
}
elseif ($_GET['menu'] == 'sonia') {
  print "halo aku sonia";
}
elseif ($_GET['menu'] == 'inventarisir') {
  include('konten/inventaris.php');
}
elseif ($_GET['menu'] == 'peminjaman') {
  include('konten/peminjaman.php');
}
elseif ($_GET['menu'] == 'logout') {
  include('konten/logout.php');
}
elseif ($_GET['menu'] == 'pengembalian') {
  include('konten/pengembalian.php');
}
elseif ($_GET['menu'] == 'laporan') {
  include('konten/laporan.php');
}
elseif ($_GET['menu'] == 'jenis') {
  include('konten/jenis.php');
}
elseif ($_GET['menu'] == 'tambah-jenis') {
  include('konten/tambah-jenis.php');
}
elseif ($_GET['menu'] == 'ruangan') {
  include('konten/ruangan.php');
}
elseif ($_GET['menu'] == 'tambah-ruangan') {
  include('konten/tambah-ruangan.php');
}