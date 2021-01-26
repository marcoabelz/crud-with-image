<?php 

    include_once('koneksi.php');
    $id = $_GET['id'];
    $kuantitas = $_GET['kuantitas'];
    // $kuantitas = $_POST['kuantitas'];
    // echo $kuantitas;
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
    $namaBarang = $row['nama_produk'];
    $stokBarang = $row['stok'];

    $sisaStok = $stokBarang - $kuantitas;
    // echo $sisaStok;
    echo "<script>
        alert('Berhasil Melakukan Pembayaran Handphone $namaBarang, sebanyak $kuantitas unit. Terima Kasih!')
    </script>";
    $updateQuery = mysqli_query($koneksi, "UPDATE produk SET stok = '$sisaStok' WHERE id = '$id'");
    echo "<a href='index.php'>Kembali Ke Home</a>";


?>