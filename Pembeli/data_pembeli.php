<?php
require '../Functions/functions.php';

$pembeli = query("SELECT * FROM pembeli");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

     
    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Data Pembeli</h1>
    <a href="tambah_pembeli.php"class = "btn btn-primary"> Tambah Pembeli </a> 
    <table class="table" border="1">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pembeli as $pbl) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $pbl['id_pembeli']; ?></td>
                    <td><?= $pbl['nama_pembeli']; ?></td>
                    <td><?= $pbl['jk']; ?></td>
                    <td><?= $pbl['no_telp']; ?></td>
                    <td>
                <a href="ubah_pembeli.php?id=<?php echo $pbl['id_pembeli']; ?>">Edit</a> |
                <a href="hapus_pembeli.php?id=<?php echo $pbl['id_pembeli']; ?>">Delete</a>
            </td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
