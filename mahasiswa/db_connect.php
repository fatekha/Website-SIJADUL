<?php

    session_start();
    if ($_SESSION['auth'] != "auth_mhs") {
        header("Location: ../index.php");
    }

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_c = "pengajuan_skripsi";
    $mysqli = new mysqli($host, $user, $pass, $db_c);
    $query_mhs = $_SESSION['db_q'];
    $result_mhs = $mysqli->query($query_mhs);
    $assoc_mhs = $result_mhs->fetch_assoc();

?>