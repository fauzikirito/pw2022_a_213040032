<?php 
require '../../function.php';

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tubes';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'";
$result = query($query);

?>

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