<?php
    include 'db_connect.php';

    // Mengambil data fakultas dosen yang sedang login
    $fakultas = $assoc_dsn["fakultas"];
    // Mengambil data skripsi berdasarkan fakultas
    $query_skripsi = "SELECT * FROM skripsi INNER JOIN mahasiswa ON skripsi.mhs_id=mahasiswa.mhs_id WHERE mahasiswa.fakultas='$fakultas'";
    $result_skripsi = $mysqli->query($query_skripsi);
    $row_skripsi = $result_skripsi->fetch_all(MYSQLI_ASSOC);
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

    <title>Keputusan Pengajuan Judul</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .accepted {
            background-color: #d4edda;
        }
        .under-consideration {
            background-color: #fff3cd;
        }
        .rejected {
            background-color: #f8d7da;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">
        <img src="../img/logo.png" alt="Logo" style="height: 30px; margin-right: 10px;">
        SISTEM MENU DOSEN PEMBIMBING | <b>UNIVERSITAS SELAMAT SRI</b></a>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
                  <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"><i class="fa-solid fa-gauge mr-2"></i>Beranda</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="informasi.php"><i class="fa-solid fa-envelope mr-2"></i>Informasi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="keputusan.php"><i class="fa-solid fa-chalkboard-user mr-2"></i>Keputusan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="bimbingan.php"><i class="fa-solid fa-graduation-cap mr-2"></i>Data MHS Bim</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="kumpulan.php"><i class="fa-solid fa-book mr-2"></i>Kumpulan Judul</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a><hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-chalkboard-user mr-2"></i> Keputusan Pengajuan Judul</h3><hr>
        <table>
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($row_skripsi as $row) {
                        if($row['status'] == '1' || $row['status'] == '3') {
                            $status_class = '';
                            $status_text = '';
                            $id_skripsi = $row['skripsi_id'];

                            if($row['status'] == 1) {
                                $status_class = 'under-consideration';
                                $status_text = 'Diperiksa';
                            } elseif ($row['status'] == 2) {
                                $status_class = 'accepted';
                                $status_text = 'Diterima';
                            } elseif ($row['status'] == 3) {
                                $status_class = 'rejected';
                                $status_text = 'Ditolak';
                            }

                            echo "<tr class='$status_class'>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['judul'] . "</td>";
                            echo "<td class='status-text'>" . $status_text . "</td>";
                            echo "<td>
                                    <form action='./preview.php' action='GET'>
                                        <button name='preview' value='$id_skripsi' type='submit'>Lihat</button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7/U5e6rtmRJd3tW/q/Jh9yuopNqen5M1A6R" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.update-status').on('click', function(){
            var id = $(this).data('id');
            var status = $(this).data('status');
            var row = $(this).closest('tr');
            
            $.ajax({
                url: 'update_status.php',
                method: 'POST',
                data: {
                    skripsi_id: id,
                    status: status
                },
                success: function(response) {
                    if(response == 'success') {
                        var status_text = '';
                        if(status == 1) {
                            status_text = 'Diperiksa';
                            row.attr('class', 'under-consideration');
                        } else if(status == 2) {
                            status_text = 'Diterima';
                            row.attr('class', 'accepted');
                        } else if(status == 3) {
                            status_text = 'Ditolak';
                            row.attr('class', 'rejected');
                        }
                        row.find('.status-text').text(status_text);
                    } else {
                        alert('Gagal memperbarui status.');
                    }
                }
            });
        });
    });
</script>
</body>
</html>