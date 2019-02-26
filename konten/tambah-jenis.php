<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kode = $_POST['kode'];
  $keterangan = $_POST['keterangan'];

  mysqli_query($konek, "insert into jenis values (NULL, '$nama', '$kode', '$keterangan')");

  $pesan = "<div class='alert alert-success'>Data berhasil disimpan</div>";
}
?>


<div class="col-4">
  <h1>Tambah Jenis Barang</h1>
  <?php print $pesan ?>
  <form action="" method="post">
    <div class="form-group">
      <input class="form-control" type="text" name="nama" required placeholder="Nama Barang">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="kode" required placeholder="Kode Barang">
    </div>
    <div class="form-group">
      <input class="form-control type="text" name="keterangan" placeholder="Keterangan">
    </div>
    <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
    <a href="?menu=jenis">Kembali</a>
  </form>
</div>