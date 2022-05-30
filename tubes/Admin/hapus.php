<?php 
    require '../function.php';

    if(isset($_GET['id'])) {
        
        $produk = mysqli_query($conn, "SELECT gambar_produk FROM produk WHERE id_produk = '".$_GET['id']."' ");
        $p = mysqli_fetch_object($produk);

        unlink('../img/'.$p->gambar_produk);

        $delete = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '".$_GET['id']."' ");

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