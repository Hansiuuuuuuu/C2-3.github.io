<?php
  require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="../add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="../aksi/addData.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Tiket</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" placeholder="" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="Harga" placeholder="" required>
        </div>
        <div class="inputBox">
          <label for="">Jam Penerbangan</label>
          <input type="number" name="Jam" placeholder="" required>
        </div>
        <input type="submit" value="Tambah Penerbangan" name="tambah">
        <a href="../halaman/index.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>