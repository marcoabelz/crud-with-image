<?php 

    include_once('koneksi.php');
    $id = $_GET['id'];

    $querySelect = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
    $resultQuerySelect = mysqli_fetch_array($querySelect);
    $namaProduk = $resultQuerySelect['nama_produk'];
    $fileFoto = $resultQuerySelect['foto_produk'];
    // var_dump($fileFoto);
    unlink("images/$fileFoto");
    $queryDelete = mysqli_query($koneksi, "DELETE FROM produk WHERE id = '$id'");

    echo "<script>alert('$namaProduk Berhasil Di Hapus')</script>";
    echo "<a href ='index.php'>Kembali Ke Home</a>";

?>