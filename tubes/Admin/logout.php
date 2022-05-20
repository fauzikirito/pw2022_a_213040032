<?php
session_start();
session_destroy();
$_SESSION['status_logout'] != true;
echo '<script>document.location="login.php"</script>';
?>