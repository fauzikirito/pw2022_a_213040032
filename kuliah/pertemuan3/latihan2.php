<?php
//PENGKONDISIAN/PERCABANGAN
//if else
//if else if else
//ternary
//switch


//Penggunaan if else
$x = 10;
if($x < 10) {
    echo "Benar";
} else {echo "Salah";
}

echo "<hr>";

//Pengunaan if else if else
$x = 20;
if($x < 10) {
    echo "Benar";
} else if($x == 20) {
    echo "Bingo!";
} else { echo "Salah";
}

echo "<hr>";

//Switch
$angka = 2;
switch ($angka) {
    case 1:
        echo "Isi variabel angka adalah 1";
        break;
    case 2:
        echo "Isi variabel angka adalah 2";
        break;
    case 3:
        echo "Isi variabel angka adalah 3";
        break;
    default:
        echo "Variabel angka tidak ditemukan";
        break;
}

echo "<hr>";

//Ternary
$nilai = 10;
echo $nilai > 7 ? "Sangat Baik" : "Baik";
//Apabila menuliskan menggunakan struktur if else
$nilai = 10;
if($nilai > 5) {
    echo "Sangat Baik";
} else {
    echo "Baik";
}
?>