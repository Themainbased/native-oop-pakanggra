<?php
    error_reporting(0);
    $koneksi = mysqli_connect("localhost","root","","bikinulang_1");
 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
?>