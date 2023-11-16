<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* ... (stylesheet lainnya) ... */

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f2f2f2;
        }

        h2 {
            color: #2ecc71; /* Warna hijau */
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2ecc71;
            color: #fff;
        }

        p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            cursor: pointer;
        }

    </style>

    <title>Flight Booking | Web Design Mastery</title>
</head>
<body>
    <nav>
        <div class="nav__logo">Web Design Mastery</div>
        <ul class="nav__links">
            <li class="Beranda"><a href="#">Beranda</a></li>
            <li class="Tentang"><a href="#">Tentang</a></li>
            <li class="Penawaran"><a href="#">Penawaran</a></li>
            <li class="Tempat"><a href="#">Tempat Duduk</a></li>
            <li class="Tujuan"><a href="#">Tujuan</a></li>
        </ul>
        <button class="btn">LOGIN</button>
    </nav>

    <header class="section__container header__container">
        <h1 class="section__header">Temukan Dan Pesan<br />Pengalaman Luar Biasa</h1>
        <img class="ft" src="assets/garudahead.jpg" alt="header" />
    </header>

    <h2>Terima kasih!</h2>
    <p>Pemesanan Anda telah berhasil dikonfirmasi.</p>
    <p>Informasi pemesanan:</p>

    <?php
    // Jika menggunakan session untuk menyimpan data, Anda bisa mengambilnya di sini
    // Misalnya, $_SESSION["nama"], $_SESSION["no_hp"], $_SESSION["email"]

    // Jika data disimpan di database, ambil dan tampilkan informasi
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flight_booking";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM bookings ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table>";
        echo "<tr><th>Nama</th><td>" . $row["nama"] . "</td></tr>";
        echo "<tr><th>No HP</th><td>" . $row["no_hp"] . "</td></tr>";
        echo "<tr><th>Email</th><td>" . $row["email"] . "</td></tr>";
        echo "</table>";

        // Form pembatalan booking
        echo "<form action='cancel_booking.php' method='post'>";
        echo "<input type='hidden' name='booking_id' value='" . $row["id"] . "'>";
        echo "<button type='submit' name='cancel_booking'>Batalkan Booking</button>";
        echo "</form>";
        
    }

    $conn->close();
    ?>

    <!-- ... (bagian lainnya) ... -->

</body>
</html>
