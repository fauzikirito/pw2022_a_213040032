<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tubes';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke Database');

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