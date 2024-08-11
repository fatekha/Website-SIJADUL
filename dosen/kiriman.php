<?php
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $judul = $_POST['judul'];
    $abstrak = $_POST['abstrak'];
    $keywords = $_POST['keywords'];
    $pembimbing = $_POST['pembimbing'];
    $nip_pembimbing = $_POST['nip_pembimbing'];
    $fakultas_pembimbing = $_POST['fakultas_pembimbing'];
    $tanggal_pengajuan = $_POST['tanggal_pengajuan'];

    $sql = "INSERT INTO pengajuan_judul (nama, nim, prodi, fakultas, email, telepon, judul, abstrak, keywords, pembimbing, nip_pembimbing, fakultas_pembimbing, tanggal_pengajuan) 
            VALUES ('$nama', '$nim', '$prodi', '$fakultas', '$email', '$telepon', '$judul', '$abstrak', '$keywords', '$pembimbing', '$nip_pembimbing', '$fakultas_pembimbing', '$tanggal_pengajuan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>