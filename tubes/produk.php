<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/user.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Toko Action Figure</title>
</head>
<body>


<!-- Header -->
    <header>
        <div class="container">
            <h1><a href="index.php">Saikyou</a></h1>
                <ul>
                    <li><a href="produk.php">Produk</a></li>
                </ul>
        </div>
    </header>

<body>

<!-- Search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari">
            </form>
        </div>
    </div>

<!-- Produk -->
    <div class="section">
        <div class="container">
            <h3>Produk Kami</h3>
            <!-- <div class="box"> -->

                <?php 
                    $produk = mysqli_query($conn, "SELECT * FROM produk WHERE status_produk = 1 ORDER BY id_produk DESC");
                    if(mysqli_num_rows($produk) > 0) {
                        while($p = mysqli_fetch_array($produk)) {
                    
                ?>
                <a href="detail-produk.php?id=<?php echo $p['id_produk'] ?>">
                <div class="col-4">
                    <img src="img/<?php echo $p['gambar_produk'] ?>">
                    <p class="nama"><?php echo $p['nama_produk'] ?></p>
                    <p class="harga">Rp. <?php echo number_format($p['harga_produk']) ?></p>
                </div>
                </a>
                <?php }} else { ?>
                    <p>Produk tidak ada</p>
                <?php } ?>
            <!-- </div> -->
        </div>
    </div>

<!-- Footer -->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p>Jl. Setiabudi No. 15</p>

            <h4>Email</h4>
            <p>saikyou@gmail.com</p>

            <h4>No. Hp</h4>
            <p>0813xxxxxxxx</p>

            <small>Copyright &copy; 2022 - Saikyou</small>
        </div>
    </div>
</body>    