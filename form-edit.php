<?php 

    include_once('koneksi.php');
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <h1>Form Edit Produk</h1>
    <form method="POST" action="edit-produk.php?id=<?=$id; ?>">
        <label><b>Nama Produk : </b></label>
        <input type="text" name="nama" placeholder="<?= $row['nama_produk']; ?>" /><br/><br/>
        <label><b>Harga Produk : </b></label>
        <input type="number" name="harga" placeholder="<?= $row['harga']; ?>" /><br/><br/>
        <label><b>Tanggal Rilis : </b></label>
        <input style="margin-right: 10px;" type="date" name="date"/><span><?= $row['tanggal_rilis']; ?></span><br/><br/>
        <label><b>Stok Barang : </b></label>
        <input type="number" name="stok" placeholder="<?= $row['stok']; ?>" /><br/><br/>
        <input type="submit" value="SIMPAN PRODUK" /><br/><br/>
    </form>
</body>
</html>