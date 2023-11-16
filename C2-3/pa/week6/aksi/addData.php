<?php
require "../koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $harga = $_POST["Harga"];
    $Jam = $_POST["Jam"];

    // if (move_uploaded_file($tmp, '../databaseImages/' . $gambarBaru)) {
        $sql = "INSERT INTO `pesawat` (`ID`, `Nama`, `Harga`, `Jam Penerbangan`) VALUES ('1', 'Citilink', '1600000', '10.00');";

        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            echo "
                <script>
                  alert('Data berhasil ditambah');
                  document.location.href = '../halaman/index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                  alert('Data gagal ditambah');
                  document.location.href = '../halaman/index.php';
                </script>
            ";
        }
    }

?>
