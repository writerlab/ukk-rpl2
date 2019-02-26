<?php
if (isset($_POST['masuk'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($konek, "
  select * from petugas where username='$user' and password=md5('$password')
  ");

  $jumlah = mysqli_num_rows($query);
  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['user'] = $sesi['username'];
    $_SESSION['nama'] = $sesi['nama_petugas'];
    $_SESSION['id_level'] = $sesi['id_level'];
    $_SESSION['id'] = $sesi['id_petugas'];

    header('Location: ?menu=home');
  } else {
    print "login gagal";
  }
}
?>


<div class="text-center col-3 offset-md-4">
  <h1>UKK.INVENTARIS.</h1>
  <form action="" method="post" class="form-signin">
  <h1 class="h3 mb-3 font-weight-normal">Silakan Masuk</h1>
    <div class="form-group">
      <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Nama pengguna" required autofocus>
    </div>
    <div class="form-group">
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Katasandi" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="masuk" type="submit">Masuk</button>
  </form>
</div>