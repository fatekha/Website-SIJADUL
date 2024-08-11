<?php

    session_start();
    if ($_SESSION['auth'] != "auth_dsn") {
        header("Location: ../index.php");
    }

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_c = "pengajuan_skripsi";
    $mysqli = new mysqli($host, $user, $pass, $db_c);
    $query_dsn = $_SESSION['db_q'];
    $result_dsn = $mysqli->query($query_dsn);
    $assoc_dsn = $result_dsn->fetch_assoc();

?>