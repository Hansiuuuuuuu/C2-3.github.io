<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];

    // Koneksi ke database (gantilah sesuai pengaturan database Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flight_booking";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    // Insert data ke dalam tabel
    $sql = "INSERT INTO bookings (nama, no_hp, email) VALUES ('$nama', '$no_hp', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirect pengguna ke halaman konfirmasi
        header("Location: konfirmasi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
