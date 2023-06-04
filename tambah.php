<?php 
require 'functions.php';
//cekk apakah tomboh sudah ditekan atau belum
if(isset($_POST["submit"])){
  //ambil data tiap elemen
 

  //cek keberhasilan
  if (tambah($_POST) >0 ) {
    echo "
    <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
    </script>
    ";
  } else{
    echo "
    <script>
      alert('data gagal ditambhkan');
      document.location.href = 'index.php';
    </script>
    ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h1>Tambah data mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nim">nim:</label>
        <input type="text" name="nim" id="nim" required>
      </li>
      <li>
        <label for="nama">nama:</label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="email">email:</label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">gambar:</label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">tambah data</button>
      </li>
    </ul>
  </form>

  <a href="index.php">Kembali</a>
</body>
</html>