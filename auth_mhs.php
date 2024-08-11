<?php

	$host = "localhost";
    $user = "root";
    $pass = "";
    $db_c = "pengajuan_skripsi";
    $mysqli = new mysqli($host, $user, $pass, $db_c);
    
	$auth_user = $_GET['user']; $auth_pass = $_GET['pass'];
	echo $mysqli->host_info;
	echo "<br/>";

	$query = "SELECT * FROM mahasiswa WHERE mhs_user='$auth_user' AND mhs_pass='$auth_pass'";
	$result = $mysqli->query($query);
	$assoc = $result->fetch_assoc();

	if($assoc > 0) {

		session_start();
		$_SESSION['auth'] = "auth_mhs";
		$_SESSION['user'] = $auth_user;
		$_SESSION['pass'] = $auth_pass;
		$_SESSION['db_q'] = $query;
		header("Location: ./mahasiswa/index.php");

	} else {

		echo "Something is wrong! Please check your username or password and try again. <br/>";
		echo "<h1><a href='./index.php'>Login Kembali</a></h1>";

	}

?>