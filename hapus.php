<?php
include 'koneksi.php';
$id = $_GET['id_peminjam'];
$sql = "DELETE from tb_mobil where id_mobil='$id'";
$sql = "DELETE from tb_peminjam where id_peminjam='$id'";

$query = mysqli_query($db, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>
