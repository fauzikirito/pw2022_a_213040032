<?php
//PENGULANGAN
//for
//while
//do - while
//foreach : Pengulangan Khusus Array

for($i = 0; $i < 5; $i++) {
    echo "Hello World! <br>";
}

echo "<hr>";

$i = 0;
while($i < 5) {
    echo "Hello World! <br>";
    $i++;
}

echo "<hr>";

//pengulangan do while akan menjalankan terlebih dahulu, walau kondisi false sekalipun
$i = 10;
do {
    echo "Hello World! <br>";
    $i++;
} while($i < 5);


?>