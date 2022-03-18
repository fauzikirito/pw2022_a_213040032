<?php
//ARRAY
//Array adalah variabel yang dapat menampung lebih dari satu nilai sekaligus
//Elemen pada Array boleh memiliki tipe data yang berbeda
//Pasangan antara Key dan Value
//Key-nya dalah index yang dimulai dari 0

//Membuat Array
//Cara baru :
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
//Cara lama :
$bulan = array("Januari", "Februari", "Maret", "April");
$arr1 = [123, "Tulisan", false];

//Mencetak semua elemen pada Array
//var_dump() atau print_r()
//Digunakan khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//Mencetak 1 elemen pada array
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

//Menambah elemen baru di akhir Array
var_dump($hari);
$hari[] = "Sabtu";
echo "<br>";
var_dump($hari);
?>