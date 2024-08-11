<?php

    include 'db_connect.php';

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

    <title>Dashboard</title>
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
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-gauge mr-2"></i> BERANDA</h3><hr>

        <div class="row text-white">
        <div class="card bg-info ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
          <i class="fa-regular fa-pen-to-square mr-2"></i> 
          </div>
        <h5 class="card-title ">Kirim Judul</h5>
        <div class="display-4">Tulis</div>
         <a href="kirim.php"><p class="card-text text-white">Detailnya<i class="fas fa-angle-double-right ml-2" ></i></p></a>
       </div>
    </div>
      <div class="card bg-success ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
         <i class="fa-solid fa-chalkboard-user mr-2"></i>
          </div>
        <h5 class="card-title ">Data Dosen</h5>
        <div class="display-4">Dosen</div>
         <a href="data_dosen.php"><p class="card-text text-white">Detailnya<i class="fas fa-angle-double-right ml-2" ></i></p></a>
       </div>
    </div>
      <div class="card bg-danger ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
         <i class="fa-solid fa-graduation-cap mr-2"></i>
          </div>
        <h5 class="card-title ">Keterbaruan Judul</h5>
        <div class="display-4">Status</div>
         <a href="keterbaruan.php"><p class="card-text text-white">Detailnya<i class="fas fa-angle-double-right ml-2" ></i></p></a>
       </div>
    </div>
    <div class="card bg-danger ml-5 mt-6" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
        <i class="fa-solid fa-book mr-2"></i>
          </div>
        <h5 class="card-title ">Riwayat Judul</h5>
        <div class="display-4">Judul</div>
         <a href="riwayat.php"><p class="card-text text-white">Detailnya<i class="fas fa-angle-double-right ml-2" ></i></p></a>
       </div>
    </div>


      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>