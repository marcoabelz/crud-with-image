<?php include_once('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUK HP</title>
</head>
<body>
    <h1>Produk HP</h1>
    <a href="form-tambah-data.php">Tambah Data + </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Foto Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Tanggal Rilis</th>
            <th>Stok</th>
            <th colspan="3">Tombol Aksi</th>
        </tr>
        <?php 
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($row = mysqli_fetch_array($query)){
                $tanggal_rilis = $row['tanggal_rilis'];
                $formatTanggal = date('d F Y', strtotime($tanggal_rilis));
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><img style="width: 150px; height: 150px;" src="images/<?= $row['foto_produk']; ?>"></td>
                <td style="text-align: center;"><?= $row['nama_produk']; ?></td>
                <td>Rp.<?= $row['harga']; ?></td>
                <td style="text-align: center;"><?= $formatTanggal; ?></td>
                <td style="text-align: center;"><?= $row['stok']; ?></td>
                <td style="text-align: center;"><a href="form-beli.php?id=<?= $row['id']; ?>">BELI</a></td>
                <td style="text-align: center;"><a href="form-edit.php?id=<?= $row['id']; ?>">EDIT</a></td>
                <td style="text-align: center;"><a href="hapus-produk.php?id=<?= $row['id']; ?>">Hapus</a></td>
            </tr>
        <?php
            $no ++; 
            }
         ?>
    </table>
</body>
</html>