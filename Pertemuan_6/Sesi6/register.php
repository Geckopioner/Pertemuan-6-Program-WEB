<?php
include_once("konfigurasi.php");
    $psn ="";
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        if ($pass1==$pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];

            $sql = "INSERT INTO tbuser(nama,email,user,passkey,iduser)VALUES('$nama','$email','$user'".md5($pass1)."','".md5($nama)."');";
            $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,PORT) or die ("Lo ga bisa masuk");
            $hasil = mysqli_query($cnn.$sql);
            if($hasil){
                $psn ="Registrasi berhasil,silahkan login kembali";
            }
        }else{
            $psn = "LO GAGAL, COBA LAGI";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php
    if(!$psn==""){
        echo "<div>".$psn."</div>";
    }
?>
    <form action = "register.php" method = "POST">
    <div>
            Nama lengkap
            <input type ="text" name="txNAMA">
    </div>

    <div>
            Email
            <input type ="Email" name= "txEMAIL">
    </div>

    <div>
            user_name
            <input type ="text" name= "txUSER">
    </div>

    <div>
            password
            <input type ="password" name= "txPASS1">
    </div>

    <div>
            password
            <input type ="password" name= "txPASS2">
    </div>

    <div>
        Password<sup>konfigurasi</sup>
        <input type="password" name="txPASS1">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>

</body>
</html>