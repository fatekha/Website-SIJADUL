<?php

    include 'db_connect.php';

    $fakultas = $assoc_mhs['fakultas'];
    $query_dsn = "SELECT * FROM dosen WHERE fakultas='$fakultas'";
    $result_dsn = $mysqli->query($query_dsn);
    $assoc_dsn = $result_dsn->fetch_assoc();

    $id_mhs = $assoc_mhs['mhs_id'];
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
    <title>Kirim Judul</title>
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
        <h3><i class="fa-regular fa-pen-to-square mr-2"></i> Kirim Judul</h3><hr>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Judul Skripsi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto; /* Center the table */
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            vertical-align: top; /* Align text to the top */
            width: 50%;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 98%; /* Slightly less than 100% to account for padding */
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Form Pengajuan Judul Skripsi</h2>

<form action="/submit" method="post">
    <table>
        <tr>
            <th colspan="2">Identitas Mahasiswa</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $assoc_mhs["nama"]; ?></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa (NIM)</td>
            <td><?php echo $assoc_mhs["nim"]; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php echo $assoc_mhs["prodi"]; ?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td><?php echo $assoc_mhs["fakultas"]; ?></td>
        </tr>
        <tr>
            <td>Alamat Email</td>
            <td><?php echo $assoc_mhs["email"]; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><?php echo $assoc_mhs["telepon"]; ?></td>
        </tr>
    

        
        <tr>
            <th colspan="2">Informasi Pembimbing</th>
        </tr>
        <tr>
            <td>Nama Dosen Pembimbing</td>
            <td><?php echo $assoc_dsn["nama"]; ?></td>
        </tr>
        <tr>
            <td>Fakultas atau Departemen Dosen Pembimbing</td>
            <td><?php echo $assoc_dsn["fakultas"]; ?></td>
        </tr>



         <tr>
            <th colspan="2">Detail Skripsi</th>
        </tr>
        <tr>
            <td>Judul Skripsi:</td>
            <?php

                $judul = $row_skripsi['judul'];

                if($row_skripsi['status'] == 1 OR $row_skripsi['status'] == 2) {
                    echo "<td><input type='text' value='$judul'disabled/></td>";
                } else {
                    echo "<td><input type='text' name='judul' required/></td>";
                }
                
            ?>
        </tr>
        <tr>
            <td>Abstrak atau Ringkasan:</td>
            <?php

                $abstrak = $row_skripsi['abstrak'];

                if($row_skripsi['status'] == 1 OR $row_skripsi['status'] == 2) {
                    echo "<td><textarea rows='5' disabled>$abstrak</textarea></td>";
                } else {
                    echo "<td><textarea  name='abstrak' rows='5' required></textarea></td>";
                }
                
            ?>
        </tr>
        <tr>
            <td>Kata Kunci:</td>
            <?php

                $katakunci = $row_skripsi['katakunci'];

                if($row_skripsi['status'] == 1 OR $row_skripsi['status'] == 2) {
                    echo "<td><input type='text' value='$katakunci' disabled/></td>";
                } else {
                    echo "<td><input type='text' name='katakunci' required/></td>";
                }

            ?>
        </tr>
        
        <tr>
            <td colspan="2" style="text-align: center;">
            <?php

                $katakunci = $row_skripsi['katakunci'];

                if($row_skripsi['status'] == 1) {
                    echo "<input type='button' value='Masih Diperiksa' disabled>";
                } else if ($row_skripsi['status'] == 2) {
                    echo "<input type='button' value='Judul Diterima' disabled>";
                } else {
                    echo "<input type='submit'/>";
                }

            ?>
            </td>
        </tr>
    </table>
</form>

</body>
</html>