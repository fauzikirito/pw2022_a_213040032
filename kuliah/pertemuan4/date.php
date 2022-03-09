<?php 
//FUNCTION

//Build-In Function
// 1. date();
echo date("l, j F Y");
echo "<hr>";
echo date("l, d-M-Y");
echo "<hr>";

// 2. time();
echo time();
//UNIX TIMESTAMPT /EPOCH Time
//Detik yang sudah berlalu sejak 1 Januari 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// 3. mktime(0, 0, 0, 0, 0, 0);
//Mendapatkan detik pada tanggal tertentu
// Jam, menit, detik, bulan, tanggal, tahun
echo mktime(0, 0, 0, 3, 5, 2002);
echo "<hr>";
echo date("l", mktime(0, 0, 0, 7, 1, 2002));
echo "<hr>";

// 4. strtotime
echo date ("l", strtotime("25 aug 1985"));
echo "<hr>";


// STRING
// strlen(); untuk menghitung panjang sebuah string
// strcmp(); untuk membandingkan 2 buah string
// explode(); untuk memecah sebuah string menjadi array
// htmlspecialchars(); 

// UTILITY
// var_dump(); Untuk mencetak isi dari sebuah variabel
// isset(); akan menghasilkan nilai boolean
// empty(); mengecek sebuah variabel kosong atau tidak
// die(); untuk memberhentikan program
// sleep(); untuk memberhentikan sementara


// //MATH
// echo pow(2, 3); //Pangkat
// echo "<br>";
// echo rand(1, 6); //Mengambil angkat random 1 - 6
// echo "<br>";
// //Pembulatan
// //round(), ceil(), floor()
// echo round(2.9); //Pembulatan terdekat
// echo "<br>";
// echo ceil(2.9); //Pembulatan ke atas
// echo "<br>";
// echo floor(2.9); //Pembulatan ke bawah

//User Defined Function
// Ada pada file function.php
?>