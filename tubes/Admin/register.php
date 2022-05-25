<?php
session_start();
require "../function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Halaman Registrasi</title>
</head>
<body id=bg-login>
    <div class="box-login">
        <h2>Registrasi</h2>
        <form action="" method="POST">
            <input type="text" name="nama" placeholder="Nama" class="input-control">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <input type="password" name="re_password" placeholder="Konfirmasi Password" class="input-control">
            <input type="submit" name="register" value="Register" class="btn">
        </form> 

        <!-- Pengecekkan Username & Password -->
        <?php 
            if(isset($_POST['register'])) {
                if(registrasi($_POST) > 0) {
                    echo "<script>alert('User baru telah ditambahkan')</script>";
                    echo '<script>window.location="login.php"</script>';
                } else {
                    echo mysqli_error($conn);
                }
            }

        ?>

    </div>  
</body>
</html>