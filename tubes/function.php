<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tubes';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke Database');


function registrasi($data) {
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $username = mysqli_real_escape_string($conn, $data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['re_password']);

    // Cek password sesuai atau tidak 
    if($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }

    // Enkripsi password
    $password = md5($password);
 
    mysqli_query($conn, "INSERT INTO admin VALUES('', '$nama', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $query = "SELECT * FROM produk";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
}
    return $rows;
}

?>