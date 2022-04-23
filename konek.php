<?php
$servername = "localhost";
$database = "db_febi";
$username = "root";
$password="";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo("Maaf koneksi anda gagal") ;
}
?>