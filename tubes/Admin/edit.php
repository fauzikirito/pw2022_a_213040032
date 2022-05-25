<?php
    session_start();
    require '../function.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
}
    // $id = $_GET['id'];
    // $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk =" . $id);
    // $result = mysqli_query($conn, $query);

    // Menampilkan data produk
    $produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$_GET['id']."' " );
    // Menampung data dari variable produk sebagai objek
    $p = mysqli_fetch_object($produk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
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
                    <li><a href="akun.php">Akun</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        </div>
    </header>

<!-- Isi konten -->
    <div class="beranda">
        <div class="container">
            <h3>Edit Data Produk</h3>
            <div class="box">
                <form action="" method="POST" autocomplete="off">
                    <input type="text" class="input-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?php echo $p->nama_produk ?>" required>
                    <input type="text" class="input-control" id="harga" name="harga_produk" placeholder="Harga" value="<?php echo $p->harga_produk ?>" required>
                    <textarea class="input-control" name="deskripsi_produk" placeholder="Deskripsi" value="<?php echo $p->deskripsi_produk ?>"></textarea>
                    <input type="text" class="input-control" id="gambar" name="gambar_produk" placeholder="Gambar beserta formatnya" value="<?php echo $p->gambar_produk ?>" required>
                    <select class="input-control" name="status_produk">
                        <option value="">Pilih</option>
                        <option value="1" <?php echo ($p->status_produk == 1)? 'selected':''; ?>>Tersedia</option>
                        <option value="0" <?php echo ($p->status_produk == 0)? 'selected':''; ?> >Habis</option>
                    </select>
                    <br><br>
                    <input type="submit" name="edit" value="Edit" class="btn">
                </form>

                <!-- Jika tombol tambah ditekan -->
                <?php 
                    if(isset($_POST['edit'])) {
                        
                        $id = $_GET['id'];
                        $nama = $_POST["nama_produk"];
                        $harga = $_POST["harga_produk"];
                        $deskripsi = $_POST["deskripsi_produk"];
                        $gambar = $_POST["gambar_produk"];
                        $status = $_POST["status_produk"];
                        
                        // Melakukan query edit pada database
                        // $edit = mysqli_query($conn, "UPDATE produk SET
                        //                      nama_produk = '".$nama."',
                        //                      harga_produk = '".$harga."',
                        //                      deskripsi_produk = '".$deskripsi."',
                        //                      gambar_produk = '".$gambar."',
                        //                      status_produk = '".$status."',  
                        //                      WHERE id_produk = '".$p->id_produk."' ");

                        $edit = mysqli_query($conn, "UPDATE produk SET
                                             nama_produk = '$nama',
                                             harga_produk = '$harga',
                                             deskripsi_produk = '$deskripsi',
                                             gambar_produk = '$gambar',
                                             status_produk = '$status'  
                                             WHERE id_produk = '$id' ");


                        if($edit) {
                            echo '<script>alert("Ubah data berhasil")</script>';
                            echo '<script>window.location="produk.php"</script>';
                        } else {
                            echo 'Data gagal ditambahkan' . mysqli_error($conn);
                        }   

                    }
                
                ?>


            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Copyright &copy; 2022 - Saikyou</p>
            <p>All right reserved.</p>
        </div>
    </footer>


</body>
</html>