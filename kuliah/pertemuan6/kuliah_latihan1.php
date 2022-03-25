<?php 
//Array Assosiative
//Array yang Indexnya berasosiasi dengan nilainya
//Studi Kasus

$mahasiswa = [["nama" => "Fauzi Ilyas Nuryadi",
 "npm" => "213040032",
  "email" => "fauziilyas36363@gmail.com",
   "jurusan" => "Teknik Informatika"],

 [ "nama" => "Gilang Ramadhan",
 "npm" => "213040010",
 "email" => "gilangsky@gmail.com",
 "jurusan" => "Teknik Inormatika"],

 ["nama" => "Haykal Alvegio",
 "npm" => "213040028",
 "email" => "haykal@gmail.com",
 "jurusan" => "Teknik Informatika"]
];
// var_dump($mahasiswa[2]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"]; ?></li>
        <li>NPM: <?php echo $mhs["npm"];  ?></li>
        <li>Email: <?php echo $mhs["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php }
?>


