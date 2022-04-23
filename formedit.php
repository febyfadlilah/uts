<?php
include 'konek.php';
$id = $_GET['id_115'];
$hasil = mysqli_query($conn, "SELECT * FROM tbl_115 WHERE id_115=$id");
$data = mysqli_fetch_array($hasil); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="kotak">
        <form method="POST" action="">
            <h1>Masukkan Data</h1>
            <input type="hidden" name="id_115" value="<?= $data['id_115'] ?>">
            <div class="row">
                <label>Nama</label><br>
                <input type="text" name="nama_115" value="<?= $data['nama_115'] ?>"><br>
            </div>
            <div class="row">
                <label>Email</label><br>
                <input type="text" name="email_115" value="<?= $data['email_115'] ?>"><br>
            </div>
            <div class="row">
                <button id="btn_log" type="submit" name="kirim">SEND</button>
            </div>
        </form><br>
</div>
    <?php
    include "konek.php";

    if (isset($_POST['kirim'])) {
        $nama = $_POST["nama_115"];
        $email = $_POST["email_115"];

        $insert = "UPDATE tbl_115 set nama_115 = '$nama', email_115='$email' WHERE id_115=$id";
        $hasil = mysqli_query($conn,$insert);

        if($hasil){
            echo "<SCRIPT> alert('Yes!! Perubahan Data Sukses. Tekan OK untuk melihat data');window.location='data.php'</SCRIPT>";
        } 
    }
    ?>
</body>
</html>
