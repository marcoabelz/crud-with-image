<?php 

    include_once('koneksi.php');

    $id = $_GET['id'];
    $namaProduk = $_POST['nama'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['date'];
    $stok = $_POST['stok'];
    
    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk = '$namaProduk', harga = '$harga', tanggal_rilis = '$tanggal', stok = '$stok' WHERE id = '$id'");
    
    echo "<script>alert('Data $namaProduk Berhasil Di Update!')</script>";
    echo "<a href = 'index.php'>Kembali Ke Home</a>";

?>