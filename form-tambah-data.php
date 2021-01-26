<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH PRODUK</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="POST" action="proses-tambah-data.php" enctype="multipart/form-data">
        <label><b>Foto Produk : </b></label>
        <input type="file" name="foto"/><br/><br/>
        <label><b>Nama Produk : </b></label>
        <input type="text" name="nama" placeholder="Isi Nama / Merk Produk" /><br/><br/>
        <label><b>Harga Produk : </b></label>
        <input type="number" name="harga" placeholder="Harga Produk" /><br/><br/>
        <label><b>Tanggal Rilis : </b></label>
        <input type="date" name="date" placeholder="Tanggal Rilis" /><br/><br/>
        <label><b>Stok Barang : </b></label>
        <input type="number" name="stok" placeholder="Stok Barang" /><br/><br/>
        <input type="submit" value="SIMPAN PRODUK" /><br/><br/>
    </form>
</body>
</html>