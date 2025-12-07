<?php
include "koneksi.php";

$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$prodi  = $_POST['prodi'];
$jk     = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO mahasiswa (nim, nama, prodi, jk, alamat)
          VALUES ('$nim', '$nama', '$prodi', '$jk', '$alamat')";

if (mysqli_query($koneksi, $query)) {
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim DESC LIMIT 1");
    $row = mysqli_fetch_assoc($data);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Data Tersimpan</title>
    </head>
    <body>
        <h2>Data Berhasil Disimpan</h2>
        <table border="1">
            <tr>
                <th>NIM</th>
                <td><?= $row['nim']; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $row['nama']; ?></td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td><?= $row['prodi']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?= $row['jk']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $row['alamat']; ?></td>
            </tr>
        </table>
        <br>
        <a href="index.php">Input Data Lagi</a> |
        <a href="data.php">Lihat Semua Data</a>
    </body>
    </html>
    <?php
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>