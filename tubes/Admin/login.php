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
    <title>Halaman Login</title>
</head>
<body id=bg-login>
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
            <p class="message">Belum punya akun admin? <a href="register.php">Buat akun di sini</a></p>
        </form>
        <!-- Pengecekkan Username & Password -->
        <?php 
            if(isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, MD5($_POST['password']));
                $cek = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password = '$password'");
                if(mysqli_num_rows($cek) > 0) {
                    // $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    // $_SESSION['admin_global'] = $d;
                    // $_SESSION['id'] = $d->id_admin;
                    echo '<script>window.location="index.php"</script>';
                } else {
                    echo '<script>alert("Username atau Password salah")</script>';
            }
            }

        ?>

    </div>  
</body>
</html>