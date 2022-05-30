<?php
    session_start();
    require '../function.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
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
            <h3>Tambah Data Produk</h3>
            <div class="box">
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <input type="text" class="input-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" required>
                    <input type="text" class="input-control" id="harga" name="harga_produk" placeholder="Harga" required>
                    <textarea class="input-control" name="deskripsi_produk" placeholder="Deskripsi"></textarea>
                    <input type="file" class="input-control" id="gambar" name="gambar_produk" placeholder="Gambar beserta formatnya" required>
                    <select class="input-control" name="status_produk">
                        <option value="">Pilih</option>
                        <option value="1" >Tersedia</option>
                        <option value="0">Habis</option>
                    </select>
                    <br><br>
                    <input type="submit" name="tambah" value="Tambah" class="btn">
                </form>

                <!-- Jika tombol tambah ditekan -->
                <?php 
                    if(isset($_POST['tambah'])) {
                        
                        $nama = $_POST["nama_produk"];
                        $harga = $_POST["harga_produk"];
                        $deskripsi = $_POST["deskripsi_produk"];
                        // $gambar = $_POST["gambar_produk"];
                        $status = $_POST["status_produk"];

                        // Menampung data file yang diupload
                        $filename = $_FILES['gambar_produk']['name'];
                        $tmp_name = $_FILES['gambar_produk']['tmp_name'];

                        $type1 = explode('.', $filename);

                        // Berisi format file
                        $type2 = $type1[1];

                        $newname = 'produk'.time().'.'.$type2;

                        // Menampung format file yang diizinkan
                        $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                        // Validasi format file
                        // Jika format file yang diupload, tidak ada pada variabel array di atas :
                        if(!in_array($type2, $tipe_diizinkan)) {
                            echo '<script>alert("Format File tidak diizinkan")</script>';
                        } else {
                            // Jika format file sesuai :
                            move_uploaded_file($tmp_name, '../img/'.$newname);
                        }

                        // Melakukan Query tambah ke database
                        $tambah = mysqli_query($conn, "INSERT INTO produk VALUES (null, '$nama', '$harga', '$deskripsi', '$newname', '$status', null )" );

                        if($tambah) {
                            echo '<script>alert("Data berhasil ditambahkan")</script>';
                            echo '<script>window.location="produk.php"</script>';
                        } else {
                            'Data gagal ditambahkan'.mysqli_error($conn);
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

    <script>
            CKEDITOR.replace('deskripsi_produk');
    </script>


</body>
</html>