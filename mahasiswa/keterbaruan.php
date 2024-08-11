<?php

    include 'db_connect.php';

    $id_mhs = $assoc_mhs['mhs_id'];
    $query_dsn = "SELECT * FROM dosen";
    $result_dsn = $mysqli->query($query_dsn);
    $row_dsn = $result_dsn->fetch_all(MYSQLI_ASSOC);
    $query_skripsi = "SELECT * FROM skripsi INNER JOIN mahasiswa ON skripsi.mhs_id=mahasiswa.mhs_id WHERE mahasiswa.mhs_id=$id_mhs";
    $result_skripsi = $mysqli->query($query_skripsi);
    $row_skripsi = $result_skripsi->fetch_assoc();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Font Awesome CSS versi 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Keterbaruan Data</title>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">
        <img src="../img/logo.png" alt="Logo" style="height: 30px; margin-right: 10px;">
        SISTEM MENU MAHASISWA | <b>UNIVERSITAS SELAMAT SRI</b></a>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"><i class="fa-solid fa-gauge mr-2"></i> Beranda</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="kirim.php"><i class="fa-regular fa-pen-to-square mr-2"></i> Kirim Judul</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_dosen.php"><i class="fa-solid fa-chalkboard-user mr-2"></i> Data Dosen</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="keterbaruan.php"><i class="fa-solid fa-graduation-cap mr-2"></i> Keterbaruan Judul</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="riwayat.php"><i class="fa-solid fa-book mr-2"></i> Riwayat Judul </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Keluar </a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
    <div id="header"></div>

    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-graduation-cap mr-2"></i> Keterbaruan Judul</h3><hr>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujul Yang diperiksa kembali</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Riwayat Judul Yang Bisa diperbaiki</h2>

<table>
    <tr><th>Judul</th></tr>
    <tr><td><?php echo $row_skripsi['judul']; ?></td></tr>
    <tr><th>Abstrak</th></tr>
    <tr><td><?php echo $row_skripsi['abstrak']; ?></td></tr>
    <tr><th>Kata Kunci</th></tr>
    <tr><td><?php echo $row_skripsi['katakunci']; ?></td></tr>
    <tr><th>Komentar</th></tr>
    <tr><td><?php echo $row_skripsi['komentar']; ?></tr>
    <tr><th>Status</th></tr>
    <tr>
        <?php
            if($row_skripsi['status'] == 1) {
                echo "<td>Diperiksa</td>";
            } elseif ($row_skripsi['status'] == 2) {
                echo "<td>Diterima</td>";
            } elseif ($row_skripsi['status'] == 3) {
                echo "<td>Ditolak</td>";
            }
        ?>
    </tr>
</table>

</body>
</html>