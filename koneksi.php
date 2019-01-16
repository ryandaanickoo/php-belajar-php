<?php
    $host = "localhost"; //host database
    $username = "root"; // host username
    $password = ""; //password database
    $db = "profile";
    $koneksi = new mysqli($host, $username, $password, $db); // membuat koneksi ke server mysql

    if($koneksi->connect_error){
        die("koneksi ke database gagal");
    }
?>