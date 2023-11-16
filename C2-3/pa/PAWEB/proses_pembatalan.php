<!-- proses_pembatalan.php -->
<?php
$koneksi = new mysqli("localhost", "root", "", "namadatabase");

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

if (isset($_POST['cancel'])) {
    $sql = "DELETE FROM tiket ORDER BY id DESC LIMIT 1";
    
    if ($koneksi->query($sql) === TRUE) {
        echo "Pembatalan berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
