<?php
include '../week6/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        // Ambil data dari formulir login
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validasi data
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            $query = mysqli_fetch_assoc($result);
            if ($query["username"] == "admin") {
                echo "Login berhasil untuk username: " . $username;
                // Tambahkan pengalihan ke halaman lain jika login berhasil
                header("Location: ../week6/halaman/index.php");
            } else {
                echo "Login berhasil untuk username: " . $username;
                // Tambahkan pengalihan ke halaman lain jika login berhasil
                header("Location: index2.html");
            }
        } else {
            echo "Login gagal. Periksa kembali username dan password.";
        }
    } elseif (isset($_POST["register"])) {
        // Ambil data dari formulir register
        $newUsername = $_POST["newUsername"];
        $newPassword = $_POST["newPassword"];

        // Validasi data
        // Lakukan validasi tambahan jika diperlukan

        // Contoh insert data ke database
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
        if ($koneksi->query($insertQuery) === TRUE) {
            echo "Registrasi berhasil untuk username: " . $newUsername;
            // Tambahkan pengalihan ke halaman lain jika registrasi berhasil
            header("Location: login.php");
        } else {
            echo "Error: " . $insertQuery . "<br>" . $koneksi->error;
        }
    }
}
?>

<!-- Your login and register HTML content here -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./login.css">
    <title>Login-Register</title>
</head>

<body>
    <div class="back-image">
        <img src="bk.png" alt="background image">
    </div>
    <section class="left">
        <section class="side login">
            <a href="index.html"><button class="btn"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <p class="title">Ingin Mesan Tiket?</p>
            <p class="message">Jika anda ingin memsan Tiket silahkan register terlebih dulu</p>
            <button>Register</button>
            <img src="./images/reg_back.svg" alt="">
        </section>

        <section class="main register">
            <div class="container">
                <p class="title">Register</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <!-- ... (formulir register lainnya) ... -->
                    <div class="form-control">
                        <input type="text" name="newUsername" placeholder="Username">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="newPassword" placeholder="Password">
                        <i class="fas fa-unlock"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Confirm password">
                        <i class="fas fa-lock"></i>
                    </div>

                    <button type="submit" name="register" class="submit">Register</button>
                </form>
            </div>
        </section>
    </section>

    <section class="right">
        <section class="side register">
            <a href="index.html"><button class="btn"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <p class="title">Tiket Murah hanya ada di kami :)</p>
            <p class="message">"Kepuasaan Pelanggan Adalah Kepuasan Kami..."</p>
            <button>Login</button>
        </section>

        <section class="main login">
            <div class="container">
                <p class="title">Login</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Username">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="Password">
                        <i class="fas fa-unlock"></i>
                    </div>
                    <button type="submit" name="login" class="submit">Login</button>
                </form>
            </div>
        </section>
    </section>

    <script>
        var sideButtons = document.querySelectorAll('.side button');
        sideButtons.forEach(btn => btn.addEventListener('click', () => {
            document.body.classList.toggle('signup');
        }))
    </script>
</body>

</html>