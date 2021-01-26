<?php 

    include_once('koneksi.php');

    $file_foto = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['date'];
    $stok = $_POST['stok'];

    $path = "images/".$file_foto;

    move_uploaded_file($tmp_file, $path);

    mysqli_query($koneksi, "INSERT INTO produk (foto_produk, nama_produk, harga, tanggal_rilis, stok) VALUES ('$file_foto', '$nama', '$harga', '$tanggal', '$stok')");
    header("location: index.php");

?>