<!-- tiket.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Anda</title>
</head>
<body>
    <h1>Tiket Anda</h1>
    <?php
        // Ambil data dari database untuk tiket yang baru saja dipesan
        $koneksi = new mysqli("localhost", "root", "", "namadatabase");
        $sql = "SELECT * FROM tiket ORDER BY id DESC LIMIT 1";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>Event: " . $row['event_name'] . "</p>";
            echo "<p>Lokasi: " . $row['event_location'] . "</p>";
            // ... tambahkan data lainnya sesuai kebutuhan ...
        } else {
            echo "Belum ada tiket yang dipesan.";
        }

        $koneksi->close();
    ?>

    <!-- Di dalam tiket.php -->
    <form action="proses_pembatalan.php" method="post">
        <button type="submit" name="cancel">Cancel Tiket</button>
    </form>
</body>
</html>
