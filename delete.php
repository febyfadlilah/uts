<?php
include "konek.php";
$id=$_GET['id_115'];
$sql = "DELETE FROM tbl_115 WHERE id_115=$id";
$hasil = mysqli_query($conn,$sql);
if ($hasil){
    echo "<SCRIPT> alert('Penghapusan Data Sukses. Data Sudah diperbarui dalam Tabel');window.location='data.php'</SCRIPT>";
}
?>
