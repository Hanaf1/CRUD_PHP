<?php
// include 'functions.php';
require 'functions.php';
//ambil data dari tabel mahasiswa

$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No. </th>
      <th>Aksi</th>
      <th>gambar</th>
      <th>nim</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin mau dihapus ?')">hapus</a>
        </td>
        <td><img src="assets/<?= $row["gambar"]; ?>" height="200px" alt=""></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
      </tr>
      <?php $i++ ?>
    <?php endforeach ?>
  </table>
</body>

</html>