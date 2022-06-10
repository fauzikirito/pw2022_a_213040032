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
            <h3>Data Produk</h3>
            <div class="box">
                <p><a href="tambah-produk.php">Tambah Data Produk</a></p>

    <!-- Cari -->
                <form action="" class="form-cari" method="post">
                    <div class="cari">
                        <input class="search" type="text" name="search" placeholder="Cari..." id="keyword" required>	
                        <button for="search" id="tombolCari">Cari</button>
                    </div>
                </form>
    <!-- Akhir Cari -->
                
            <div id=table>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- Query untuk menampilkan data yang ada pada database -->
                        <?php 

                            $no = 1;
                            global $conn;
                            $produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");
                            if(mysqli_num_rows($produk) > 0) {

                                // Jika tombol cari ditekan
                                if(isset($_POST['search'])) {
                                    $produk = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%".$_POST['search']."%' ");
                                }
                                // Menampilkan data rows 
                                while($row = mysqli_fetch_array($produk)) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_produk'] ?></td>
                            <td>Rp. <?php echo number_format($row['harga_produk']) ?></td>
                            <td><?php echo $row['deskripsi_produk'] ?></td>
                            <td><img src="../img/<?php echo $row['gambar_produk'] ?>" width="100px"></td>
                            <td><?php echo ($row['status_produk'] == 0)? 'Stok Habis' : 'Tersedia'; ?></td>
                            <td>
                                <a href="hapus.php?id=<?php echo $row['id_produk'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                                || <a href="edit.php?id=<?php echo $row['id_produk']  ?>">Edit</a>
                            </td>
                        </tr>
                        <?php }} else { ?>
                            <tr>
                                <td colspan="8">Tidak ada data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <!-- Script Ajax -->
    <script>
        const keyword = document.getElementById('keyword');
        const table = document.getElementById('table');

        keyword.addEventListener('keyup', function() {
            // Membuat Ajax
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                //Cek kesiapan Ajax
                if(xhr.readyState == 4 && xhr.status == 200) {
                    table.innerHTML = xhr.responseText;
                } 
            }

            // Jalankan Ajax
            xhr.open("GET", "ajax/produk.php?keyword=" + keyword.value, true);
            xhr.send();

        });
    </script>



    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Copyright &copy; 2022 - Saikyou</p>
            <p>All right reserved.</p>
        </div>
    </footer>


</body>
</html>