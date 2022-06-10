<?php
    session_start();
    require '../function.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
}
    // Query untuk tabel admin
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin = '".@$_SESSION['id']."' " );
    // Menampung data admin
    $d = mysqli_fetch_object($query);
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

    <div class="beranda">
        <div class="container">
            <h3>Akun Profil</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                    <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                    <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
                </form>
                <?php 

                // Jika tombol Ubah Password ditekan
                if(isset($_POST['ubah_password'])) {
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];

                    // Cek kesamaan password
                    if($pass2 != $pass1) {
                        echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
                    } else {
                        $ubah_password = mysqli_query($conn, "UPDATE admin SET
                                                        password = '".MD5($pass1)."'
                                                        WHERE id_admin = '".@$d->id_admin."' ");
                        if($ubah_password) {
                            echo '<script>alert("Password berhasil diubah")</script>';
                            echo '<script>window.loaction = "akun.php"</script>';
                        } else {
                            echo 'Gagal' . mysqli_error($conn);
                        }
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