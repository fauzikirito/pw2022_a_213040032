<?php 
    require '../function.php';

    $id = $_GET['id'];

    $query = "DELETE FROM produk WHERE id_produk = $id";

    $result = mysqli_query($conn, $query);

    if($result) {
        header('Location:produk.php');
    } else {
        echo 'Data gagal dihapus';
    }




    // if(isset($_GET['idp'])) {
    //     $delete = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '".$_GET['idp']."' ");
    //     echo '<script>alert("Data berhasil dihapus")</script>';
    //     echo '<script>window.location="produk.php"</script>';
    // }
    //  else {
    //     echo '<script>alert("Data gagal dihapus")</script>';
    //     echo '<script>window.location="produk.php"</script>';
    // }

?>