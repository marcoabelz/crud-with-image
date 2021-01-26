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
    <title>Form Beli</title>
</head>
<body>
    <h1>Form Beli Produk</h1>
    <form method = POST action="konfirmasi-pembelian.php?id=<?php echo $id; ?>">
        <label><b>Nama Produk : </b></label>
        <span style="margin-left: 53px;"><?= $row['nama_produk']; ?></span><br/>
        <label><b>Harga Produk Satuan : </b></label>
        <span>Rp.<?= $row['harga']; ?></span><br/><br/>
        <label><b>Kuantitas : </b></label>
        <input style="text-align: center;" type="number" name = "kuantitas" /><br/><br/>
        <span><i>*Total Harga Ada Di Form Selanjutnya</i></span><br/><br/>
        <input type="submit" value = "Proses Pembelian" />
    </form>
</body>
</html>