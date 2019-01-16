<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
    id,
    nama,
    role,
    availability,
    age,
    location,
    years_experience,
    email
    ) VALUE
    (
        '1',
        'Arkademy',
        'Front End Developer',
        'Full time',
        '20',
        'Malang',
        '2',
        'abc@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }

?>