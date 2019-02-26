<h1>
  Data Jenis Barang
  <a href="?menu=tambah-jenis" class="btn btn-info">Tambah</a>
</h1>
<table class="table">
  <thead>
    <tr>
      <th>NO.</th>
      <th>NAMA JENIS</th>
      <th>KODE</th>
      <th>KETERANGAN</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $q = mysqli_query($konek, "select * from jenis");
    $no = 0;
    while($row = mysqli_fetch_array($q)) { 
      $no++; ?>
    <tr>
      <td><?php print $no;?></td>
      <td><?php print $row[1];?></td>
      <td><?php print $row[2];?></td>
      <td><?php print $row[3];?></td>
      <td>
        <a href="#!" class="btn btn-success">Ubah</a>
        <a href="#!" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?PHP } ?>
  </tbody>
</table>