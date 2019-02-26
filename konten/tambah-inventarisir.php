<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kondisi = $_POST['kondisi'];
  $keterangan = $_POST['keterangan'];
  $jumlah = $_POST['jumlah'];
  $id_jenis = $_POST['jenis'];
  $tgl_register = $_POST['tgl_register'];
  $id_ruang = $_POST['ruang'];
  $kode = $_POST['kode'];
  $id_petugas = $_SESSION['id'];

  mysqli_query($konek, "
    insert into inventaris values (
      NULL, '$nama', '$kondisi', '$keterangan',
      '$jumlah', $id_jenis, '$tgl_register', $id_ruang,
      '$kode', $id_petugas
      )
  ");

  $pesan = "<div class='alert alert-success'>Data berhasil disimpan</div>";
}
?>


<div class="col-4">
  <h1>Tambah Data Inventaris</h1>
  <?php print $pesan ?>
  <form action="" method="post">
    <div class="form-group">
      <input class="form-control" type="text" name="nama" required placeholder="Nama Barang">
    </div>
    <div class="form-group">
      <select name="kondisi" class="form-control">
        <option >Pilih Kondisi</option>
        <option value="baru">Baru</option>
        <option value="rusak">Rusak</option>
      </select>
    </div>
    <div class="form-group">
      <textarea name="keterangan" class="form-control" cols="30" rows="5" required placeholder="Keterangan"></textarea>
    </div>
    <div class="form-group">
      <label for="">Jumlah</label>
      <input class="form-control" type="number" name="jumlah" placeholder="Keterangan" required>
    </div>
    <div class="form-group">
      <select name="jenis" class="form-control" required>
        <option >Pilih Jenis Barang</option>
        <?php
        $q_jenis = mysqli_query($konek, "select * from jenis");
        while($r = mysqli_fetch_array($q_jenis)) {?>
          <option value="<?php print $r[0]?>"><?php print $r[1]?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Tanggal Register</label>
      <input class="form-control" type="date" name="tgl_register"required>
    </div>
    <div class="form-group">
      <select name="ruang" class="form-control" required>
        <option >Pilih Ruangan</option>
        <?php
        $q_jenis = mysqli_query($konek, "select * from ruang");
        while($r = mysqli_fetch_array($q_jenis)) {?>
          <option value="<?php print $r[0]?>"><?php print $r[1]?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="kode" placeholder="kode inventaris" required>
    </div>
    <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
    <a href="?menu=inventarisir">Kembali</a>
  </form>
</div>