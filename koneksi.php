<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "toko_hp";

    $koneksi = mysqli_connect($server, $username, $password, $database);

    if(!$koneksi) {
        echo "Database Tidak Di Temukan !";
        mysqli_error(exit);
    }

?>