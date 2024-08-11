<?php

	$host = "localhost";
    $user = "root";
    $pass = "";
    $db_c = "pengajuan_skripsi";
    $mysqli = new mysqli($host, $user, $pass, $db_c);
    
	$auth_user = $_GET['user']; 
    $auth_pass = $_GET['pass'];
    
    // Query untuk validasi pengguna
	$query = "SELECT * FROM dosen WHERE dsn_user='$auth_user' AND dsn_pass='$auth_pass'";
	$result = $mysqli->query($query);
	$assoc = $result->fetch_assoc();

	if($assoc > 0) {
        // Jika valid, set session dan redirect
		session_start();
		$_SESSION['auth'] = "auth_dsn";
		$_SESSION['user'] = $auth_user;
		$_SESSION['pass'] = $auth_pass;
		$_SESSION['db_q'] = $query;
		header("Location: ./dosen/index.php");
        exit();
	} else {
        // Jika tidak valid, tampilkan pesan kesalahan
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login Error</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f7f7f7;
        }
        .error-container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error-container h1 {
            font-size: 2rem;
            color: #dc3545;
        }
        .error-container a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <h1>Something is wrong! Please check your username or password and try again.</h1>
        <p><a href='./index.php'>Login Kembali</a></p>
    </div>

</body>
</html>
<?php
	}
?>