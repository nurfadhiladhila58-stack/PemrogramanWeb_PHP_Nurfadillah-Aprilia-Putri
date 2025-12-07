<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
        a { display: block; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
<h2>Daftar Data Mahasiswa</h2>
<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['prodi']; ?></td>
        <td><?= $row['jk']; ?></td>
        <td><?= $row['alamat']; ?></td>
    </tr>
    <?php } ?>
</table>
<a href="index.php">← Kembali ke Form Input</a>
</body>
</html>