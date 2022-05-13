<?php 

$mahasiswa = [["nama" => "Fauzi Ilyas Nuryadi",
"npm" => "213040032",
 "email" => "fauziilyas36363@gmail.com",
 "gambar" => "img/Conan.jpg",
 "row" => " 1",
  "jurusan" => "Teknik Informatika"],

[ "nama" => "Gilang Ramadhan",
"npm" => "213040004",
"email" => "gilangsky11@gmail.com",
"gambar" => "img/SAO.png",
"row" => "2",
"jurusan" => "Teknik Inormatika"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach($mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php"gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["Jurusan"] ?> ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>