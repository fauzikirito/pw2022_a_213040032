<?php
require 'function.php';

$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$_GET['id']."' ");
$p = mysqli_fetch_object($produk);
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
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="produk.php">Produk</a></li>
                </ul>
        </div>
    </header>

<body>

<!-- Detail Produk  -->
    <div class="section">
        <div class="container">
            <!-- <div class="box"> -->
                <h1>Detail Produk</h1>
                <div class="col-2">
                    <img src="img/<?php echo $p->gambar_produk ?>" width="100%">
                </div>
                <div class="col-2">
                    <h2><?php echo $p->nama_produk ?></h2>
                    <h3>Rp. <?php echo number_format($p->harga_produk ) ?></h3>
                    <p>Deskripsi : <br>
                        <?php echo $p->deskripsi_produk ?>
                    </p>
                </div>
            <!-- </div> -->
                <div class="tombol-beli">
                    <button class="btn">
                        <a href="https://api.whatsapp.com/send?phone=+6281322019270&text=Hai, saya tertarik dengan produk Anda">Beli</a>
                    </button>
                </div>
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