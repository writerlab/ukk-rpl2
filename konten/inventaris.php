<h1>
  Data Inventaris
  <a href="?menu=tambah-inventarisir" class="btn btn-info">Tambah</a>
</h1>
<table class="table">
  <thead>
    <tr>
      <th>NO.</th>
      <th>NAMA</th>
      <th>KONDISI</th>
      <th>JUMLAH</th>
      <th>JENIS</th>
      <th>TGL.REGISTER</th>
      <th>RUANG</th>
      <th>AKSI</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $q = mysqli_query($konek, 
    "select a.*, b.*, c.* from inventaris a
    inner join jenis b on a.id_jenis=b.id_jenis
    inner join ruang c on a.id_ruang=c.id_ruang"
    );
    $no = 0;
    while($r = mysqli_fetch_array($q)) {
      $no++;
    ?>
      <tr>
        <td><?php print $no?>.</td>
        <td><?php print $r[1]?></td>
        <td><?php print $r[2]?></td>
        <td><?php print $r[4]?></td>
        <td><?php print $r['nama_jenis']?></td>
        <td><?php print $r[6]?></td>
        <td><?php print $r['nama_ruang']?></td>
        <td>
          <a href="#!" class="btn btn-success">ubah</a>
          <a href="#!" class="btn btn-danger">hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>