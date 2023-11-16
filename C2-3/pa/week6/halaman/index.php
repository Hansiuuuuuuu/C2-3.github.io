<?php
require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../dashboard.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <div class="title">
          <h2>Dashboard Penerbangan</h2>
          <p>
            <?php
            $hari = array(
              "Sunday" => "Minggu",
              "Monday" => "Senin",
              "Tuesday" => "Selasa",
              "Wednesday" => "Rabu",
              "Thursday" => "Kamis",
              "Friday" => "Jumat",
              "Saturday" => "Sabtu"
            );

            date_default_timezone_set("Asia/Makassar");
            $englishDay = date("l");
            $indonesianDay = $hari[$englishDay];

            echo $indonesianDay . ", " . date("d F Y, H:i:s");
            ?>
          </p>
        </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jam_Penerbangan</th>
            <th>Action</th>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM `pesawat` WHERE 1");
          $no = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[nama]</td>";
            echo "<td>$row[harga]</td>";
            echo "<td>$row[jam]</td>";
            echo "<td class='action'>
                    <a href='../halaman/editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                    <a href='../aksi/deleteData.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a>
                    </td>";
            echo "</tr>";
            $no++;
          }
          ?>
        </table>
        <div class="tombol">
          <a href="addData.php">Tambah Data</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>