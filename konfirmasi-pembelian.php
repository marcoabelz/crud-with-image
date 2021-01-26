<?php 

    include_once('koneksi.php');
    $id = $_GET['id'];
    $kuantitas = $_POST['kuantitas'];
    // echo $kuantitas;
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
    $hargaSatuan = $row['harga'];
    $namaBarang = $row['nama_produk'];
    $stokBarang = $row['stok'];
    $hargaTotal = $hargaSatuan * $kuantitas;
    if ($kuantitas > $stokBarang) {
        // echo "Sisa Stok Barang Hanya $row[stok] Unit";
        echo "<script>
            alert('Stok Barang Sisa $stokBarang Unit');
            history.go(-1);
        </script>";
    } else { ?>
        <form method = "POST" action="beli-produk.php?id=<?= $id; ?>&kuantitas=<?= $kuantitas; ?>">
            <label>Nama Produk : </label>
            <span><?= $namaBarang; ?></span><br/>
            <label>Harga Satuan : </label>
            <span><?= $hargaSatuan; ?></span><br/>
            <label>Kuantitas : </label>
            <span><?= $kuantitas; ?></span><br/>
            <label><b>Total Harga : </label>
            <span>Rp.<?= $hargaTotal; ?></b></span><br/>
            <input style="margin-top: 20px;" type="submit" value = "PROSES PEMBAYARAN" />
        </form>
    <?php }


?>