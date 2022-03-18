<?php 
//Studi Kasus

$mahasiswa = [["Fauzi Ilyas Nuryadi", "213040032", "fauziilyas36363@gmail.com", "Teknik Informatika"],
 ["Gilang Ramadhan", "213040010", "gilangsky@gmail.com", "Teknik Inormatika"],
 ["Haykal Alvegio", "213040028", "haykal@gmail.com", "Teknik Informatika"]
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1];  ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li><?php echo $mhs[3]; ?></li>
</ul>
<?php }
?>