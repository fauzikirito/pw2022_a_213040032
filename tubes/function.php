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
 
    mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$nama', '$password')");

    return mysqli_affected_rows($conn);
}








// $namafile = $_FILES['gambar']['name'];
//                         $tmpname = $_FILES['gambar']['tmp_name'];

//                         $type1 = explode('.', $namafile);
//                         $type2 = $type1[0];

//                         $waktu = 'produk'.time().'.'.$type2;

//                         $tipe_diizinkan = array('jpg', 'jpeg', 'png');

//                         if(!in_array($type2, $tipe_diizinkan)) {

//                             echo '<script>alert("Format fil tidak diizinkan")</script>';
//                         } else {

//                             move_uploaded_file($tmpname, './CSS/'.$waktu);
//                         }

//                         $tambah = mysqli_query($conn, "INSERT INTO produk VALUES (
//                                     null,                     
//                                     '".$nama."',
//                                     '".$harga."',
//                                     '".$deskripsi."',
//                                     '".$waktu."',
//                                     '".$statu."',
//                                     null
//                             ) ");

//                     if($tambah) {
//                         echo 'Data berhasil ditambah';
//                     } else {
//                         echo 'Data gagal ditambahkan'.mysqli_error($conn);
//                     }


                    


?>