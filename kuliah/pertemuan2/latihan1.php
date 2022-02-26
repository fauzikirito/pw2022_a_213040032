<?php 
    //Pertemuan 2 - PHP Dasar
    //Sintaks PHP

    //OUTPUT
    //echo, print
    //print_r
    //var_dump

    // Ini adalah komentar
    //Nilai ada 3 : Integer, String, Boolean
    echo 1;
    echo "<br>";
    echo 10;
    echo "<hr>";

    //VARIABEL, merupakan wadah untuk menyimpan sebuah nilai
    //Nama sebuah variabel bebas, tidak boleh diawali angka dan tidak boleh pakai spasi
    $nama = 'Fauzi';
    echo $nama;
    echo "<br>";
    //Variabel bisa ditimpa
    $nama = 'Fauzi Ilyas Nuryadi';
    echo $nama;
    echo "<hr>";

    //OPERATOR
    //Aritmatika
    //Ada banyak operator, yang pertama Aritmatika +, -, *, /
    echo 1 + 2 * 3 - 4;
    echo "<br>";
    echo (5 - 2) * 3 + 5;

    echo "<br>";
    $alas = 10;
    $tinggi = 5;
    $luas_segitiga = ($alas * $tinggi) / 2;
    echo $luas_segitiga;

    echo "<hr>";
    //Assignment
    //=, +=, -=, *=, /=, %=, .=
    $x = 1;
    $x -= 5;
    echo $x;
    echo "<br>";

    $nama = "Fauzi";
    $nama .= " ";
    $nama .= "Ilyas Nuryadi";
    echo $nama;

    echo "<hr>";

    //STRING
    //'', ""
    echo "Jum'at";
    echo "<br>";
    echo 'Fauzi : "Hi"';
    //Escaped Character : \
    echo "<br>";
    echo 'Fauzi : "Jum\'at"';

    //Interpolasi, digunakan untuk mencetak isi variabel
    //Hanya bisa digunakan oleh ""
    echo "<br>";
    echo "Halo nama saya $nama";
    echo "<br>";
    $price = 500;
    echo "Price : $$price";

    //Concat/Concatenation
    //Penggabung String
    //.

    echo "<hr>";
    $nama_depan = "Fauzi";
    $nama_belakang = "Ilyas";
    //Jika ingin ada spasi ditambah spasi seperti pada contoh di bawah :
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    //Perbandingan
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    var_dump(1 == "1");
    // echo "<hr>";

    //Identitas / Strict Comparison
    // ===, !==
    echo 10 === "10";
    echo "<hr>";

    // //Logika
    // // &&, ||, !
    $x = 10;
    var_dump($x < 5 || $x % 2 == 0);
    echo "<br>";
    var_dump($x < 20 && $x % 2 == 0);

    echo "<hr>";

    //Increment / Decrement
    //Penambahan / Pengurangan 1
    // ++, --
    $x = 10;
    $x++;
    echo $x;
    echo "<hr>"

    //PENULISAN SINTAKS PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Halo Selamat Datang <?php echo "Fauzi Ilyas Nuryadi"; ?></h1>
        
    </body>
    </html>