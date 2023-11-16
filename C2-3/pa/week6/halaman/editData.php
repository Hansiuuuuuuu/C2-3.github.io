<?php
require "../koneksi.php";

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if (empty($id)) {
    echo "Data pesawat tidak ditemukan.";
    exit;
}

$query = mysqli_query($koneksi, "SELECT * FROM pesawat WHERE id = $id");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

$row = mysqli_fetch_assoc($query);

if (empty($row)) {
    echo "Data pesawat tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../add-edit.css">
</head>

<body>
    <div class="bg">
        <div class="container">
            <form action="../aksi/editData.php?id=<?php echo htmlspecialchars($id); ?>" method="POST" enctype="multipart/form-data">
                <h3>Edit Mahasiswa</h3>
                <div class="inputBox">
                    <label for="nama">Nama</label>
                    <input type="text" name="Nama" value="<?php echo htmlspecialchars($row["Nama"]); ?>" required>
                </div>
                <div class="inputBox">
                    <label for="Harga">Harga</label>
                    <input type="number" name="Harga" value="<?php echo htmlspecialchars($row["Harga"]); ?>" required>
                </div>
                <div class="inputBox">
                    <label for="Jam">Jam</label>
                    <input type="text" name="Jam_Penerbangan" value="<?php echo htmlspecialchars($row["Jam_Penerbangan"]); ?>" required>
                </div>
                <input type="submit" value="Ubah Mahasiswa" name="ubah">
                <a href="../halaman/index.php">Kembali</a>
            </form>
        </div>
    </div>
</body>

</html>
