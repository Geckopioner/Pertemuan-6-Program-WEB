<?php
    include_once("konfigurasi.php");

    $tbNAME = "tbUSER";

    $sql = "CREATE TABLE $tbNAME(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(255) NOT NULL,
        user_name VARCHAR(20),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, PORT) or die("koneksi gagal");

    $hasil = mysqli_query($cnn, $sql);
    if($hasil){
        echo "Tabel $tbNAME, berhasil dibuat ";
    }else{
        echo"Tabel $tbNAME, error creating ";
    }
    mysqli_close($cnn);
