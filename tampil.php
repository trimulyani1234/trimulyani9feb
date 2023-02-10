<!DOCTYPE html>
<html lang="en">
<head>
    <title>join tabel</title>
</head>
<body>
    <a href="tambah.php"><input type = button value = tambah ></a>
    <table border=1;>
        <tr>
            <td>No</td>
            <td>Nama Peminjam</td>
            <td>Alamat</td>
            <td>Umur</td>
            <td>Keperluan</td>
            <td>Jaminan</td>
            <td>Plat Nomor</td>
            <td>Merek</td>
            <td>Jenis Mobil</td>
            <td>Tahun Mobil</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
            <td>Aksi</td>
</tr>

<?php
include ("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_peminjam INNER JOIN tb_mobil ON tb_peminjam.id_mobil = tb_mobil.id_mobil");
$no = 1;
foreach ($query as $row):
?>
<td><?= $no++; ?></td>
<td><?= $row['nama_peminjam']; ?></td>
<td><?= $row['alamat']; ?></td>
<td><?= $row['umur']; ?></td>
<td><?= $row['keperluan']; ?></td>
<td><?= $row['jaminan']; ?></td>
<td><?= $row['plat_nomor']; ?></td>
<td><?= $row['merek']; ?></td>
<td><?= $row['jenis_mobil']; ?></td>
<td><?= $row['tahun_mobil']; ?></td>
<td><?= $row['tanggal_pinjam']; ?></td>
<td><?= $row['tanggal_kembali']; ?></td>
<td>
    <a href = "edit.php?id_peminjam=<?php echo $row['id_peminjam']; ?>">EDIT||</a>
    <a href = "hapus.php?id_peminjam=<?php echo $row['id_peminjam']; ?>">HAPUS||</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>