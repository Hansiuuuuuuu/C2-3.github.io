<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cancel_booking"])) {
    // Mengambil data dari formulir
    $booking_id = $_POST["booking_id"];

    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_tiketing_pesawat";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    // Hapus data dari tabel berdasarkan ID
    $sql = "DELETE FROM bookings WHERE id = $booking_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect pengguna kembali ke index2.html
        header("Location: index2.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit(); // Keluar untuk menghindari output tambahan sebelum redirect
    }

    $conn->close();
}
