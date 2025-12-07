<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>
    <form action="simpan.php" method="post">
        <label>NIM</label>
        <input type="text" name="nim" required>
        <label>Nama</label>
        <input type="text" name="nama" required>
        <label>Program Studi</label>
        <input type="text" name="prodi" required>
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        <br><br>
        <label>Alamat</label>
        <textarea name="alamat" required></textarea>
        <button type="submit">Simpan Data</button>
    </form>
    <a href="data.php">Lihat Semua Data</a>
</div>
</body>
</html>