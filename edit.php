
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT DATA</title>
</head>
<body>
<table border= 0; >
<from action="proses_edit.php" method="POST">
<h1> EDIT DATA </h1>
<from>
<fieldset>
<input type="hidden" name="id_peminjam" value="<?php echo $tb_mobil['id_peminjam']?>"/>
<p>
<label for = "nama_peminjam" value="<?php $row['nama_peminjam']; ?>">Nama peminjam</label></td>
<input type = "text" name = "nama_peminjam"/>
</p>
<p>
<label for = "alamat" value="<?php $row['alamat']; ?>">Alamat </label>
<input type = "text" name = "alamat" />
</p>
<p>
<label for = "umur" value="<?php $row['umur']; ?>">Umur </label>
<input type = "text" name = "umur" />
</p>
<p>
<label for = "keperluan" value ="<?php $row['keperluan']; ?>">Keperluan </label>
<input type = "text" name = "keperluan" />
</p>
<p>
<label for = "jaminan" value ="<?php $row['jaminan']; ?>">Jaminan </label>
<input type = "text" name = "jaminan" />
</p>
<p>
<label for = "plat_nomor" value="<?php $row['plat_nomor']; ?>">Plat Nomor </label>
<input type = "text" name = "plat_nomor" />
</p>
<p>
<label for = "marek" value="<?php $row['merek']; ?>">Merek </label>
<input type = "text" name = "merek" />
</p>
<p>
<label for = "jenis_mobil" value="<?php $row['jenis_mobil']; ?>">Jenis Mobil </label>
<input type = "text" name = "jenis_mobil" />
</p>
<p>
<label for = "tahun_mobil" value="<?php $row['tahun_mobil']; ?>">Tahun Mobil </label>
<input type = "number" name = "tahun_mobil" />
</p>
<p>
<label for = "tanggal_pinjam" value="<?php $row['tanggal_pinjam']; ?>">Tanggal Pinjam </label>
<input type = "date" name = "tanggal_pinjam" : />
</p>
<p>
<label for = "tanggal_kembali" value="<?php $row['tanggal_kembali']; ?>">Tanggal Kembali </label>
<input type = "date" name = "tanggal_kembali" />
</p>
<p>
    <input type="submit" value = "kirim data" name = "kirim_data" />
</p>
</fieldset>
</from>
</body>
</html>