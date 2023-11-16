<?php
require "../koneksi.php";

if (isset($_POST["ubah"])) {

    $id = $_GET["id"];
    $Nama = $_POST["Nama"];
    $harga = $_POST["Harga"];
    $Jam_Penerbangan = $_POST["Jam_Penerbangan"];

    $sql = "UPDATE pesawat SET
        Nama = '$Nama',
        Harga = '$harga',
        Jam_Penerbangan = '$Jam_Penerbangan'
        WHERE id = $id
    ";

    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "
            <script>
              alert('Data berhasil diubah');
              document.location.href = '../halaman/index.php';
            </script>
          ";
    } else {
        echo "
          <script>
            alert('Data gagal diubah');
            document.location.href = '../halaman/index.php';
          </script>
          ";
    }
}
?>
