<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
<table border= 0; >
<h1> Input Data </h1>
 <form action="proses_tambah.php" method="POST">
<from>
<fieldset>
<p>
<label for = "nama_peminjam">Nama Peminjam :</label>
<input type = "text" name = "nama_peminjam" />
</p>
<p>
<label for = "alamat">Alamat :</label>
<input type = "text" name = "alamat" />
</p>
<p>
<label for = "umur">Umur :</label>
<input type = "text" name = "umur" />
</p>
<p>
<label for = "keperluan">Keperluan :</label>
<input type = "text" name = "keperluan" />
</p>
<p>
<label for = "jaminan">Jaminan :</label>
<input type = "text" name = "jaminan" />
</p>
<p>
<label for = "plat_nomor">Plat Nomor :</label>
<input type = "text" name = "plat_nomor" />
</p>
<p>
<label for = "marek">Merek :</label>
<input type = "text" name = "merek" />
</p>
<p>
<label for = "jenis_mobil">Jenis Mobil :</label>
<input type = "text" name = "jenis_mobil" />
</p>
<p>
<label for = "tahun_mobil">Tahun Mobil :</label>
<input type = "number" name = "tahun_mobil" />
</p>
<p>
<label for = "tanggal_pinjam">Tanggal Pinjam :</label>
<input type = "date" name = "tanggal_pinjam" : />
</p>
<p>
<label for = "tanggal_kembali">Tanggal Kembali :</label>
<input type = "date" name = "tanggal_kembali" />
</p>
<p>
    <input type="submit" value = "kirim data" name = "kirim_data" />
</p>
</fieldset>
</form>
</body>
</html>