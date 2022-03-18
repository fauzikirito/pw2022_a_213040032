<?php 
//ARRAY
//Array adalah variabel yang dapat menampung lebih dari satu nilai sekaligus
$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan12 = "Desember";

//Membuat Array
//Cara baru :
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
//Cara lama :
$bulan = array("Januari", "Februari", "Maret", "April");

$myArray = [100, "Fauzi", true];

//Mencetak Array
//Mencetak 1 elemen/nilai menggunakan index-nya, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

//Mencetak semua elemen pada Array
//var_dump() atau print_r()
//Digunakan khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//Mencetak menggunakan looping
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";
//foreach
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
}
echo "<hr>";

//Memanipulasi isi Array
//Menambah elemen baru di akhir Array
$hari[] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);
?>