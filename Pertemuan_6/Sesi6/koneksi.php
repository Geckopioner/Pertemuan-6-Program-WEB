<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){
        echo"<h3> Koneksi nyak jalan </h3>";
        $sql1 = "CREATE DATABASE ". DBNAME;


        $hasil = mysqli_query($cnn, $sql1 );
        if($hasil){
            echo"Database " . DBNAME. " berhasil dibuat";
        }else{
            echo"Database " . DBNAME. " gagal berhasil dibuat";
        }
    }else{
        echo "Koneksi nu ade masalah". mysqli_connect_error;
    }