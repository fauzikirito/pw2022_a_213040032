<?php 
//Array Assosiative
//Array yang Indexnya berasosiasi dengan nilainya
//Key-nya adalah String yang kita buat sendiri
//Studi Kasus

$mahasiswa = [["nama" => "Fauzi Ilyas Nuryadi",
 "npm" => "213040032",
  "email" => "fauziilyas36363@gmail.com",
   "jurusan" => "Teknik Informatika",
   "gambar" => "SAO.png"],

 [ "nama" => "Gilang Ramadhan",
 "npm" => "213040010",
 "email" => "gilangsky@gmail.com",
 "jurusan" => "Teknik Inormatika",
 "gambar" => "SAO.png"],

 ["nama" => "Haykal Alvegio",
 "npm" => "213040028",
 "email" => "haykal@gmail.com",
 "jurusan" => "Teknik Informatika",
 "gambar" => "SAO.png"]
];
// var_dump($mahasiswa[2]["email"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar $mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"]; ?></li>
        <li>NPM: <?php echo $mhs["npm"];  ?></li>
        <li>Email: <?php echo $mhs["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
    </ul>
    <?php }
?>
</body>
</html>