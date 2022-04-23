<?php
include 'konek.php';

$query="SELECT * FROM tbl_115";
$hasil=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>TABEL DAFTAR MAHASISWA </h1><br>
        <table class="table table-bordered">
            <thead class="">
            <tr class="table-success">
                <th scope="col">ID</th>
                <th scope="col">Nama </th>
                <th scope="col">Email</th>
                <th scope="col">ACTION</th>
            </tr>
            <?php //mengolah hasil query
                while ($baris=mysqli_fetch_array($hasil)) {
            ?>
            <tr class="table-light">
                <td><?php echo $baris['id_115']?></td>
                <td><?php echo $baris['nama_115']?></td>
                <td><?php echo $baris['email_115']?></td>
                <td>
                <a href="formedit.php?id_115=<?=$baris['id_115']?>"><button type="button" class="btn btn-secondary btn-sm">Edit</button>
                <a href="delete.php?id_115=<?=$baris['id_115']?>"><button type="button" class="btn btn-secondary btn-sm">Delete</button>
            </td>
            </tr>
        <?php } ?>
    </table>
    <a href="formtambah.php"><button class="btn btn-primary">ADD</button></a>
    </div>
</body>
</html>