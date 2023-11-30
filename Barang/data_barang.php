<?php
require '../Functions/functions.php';

$barang = query("SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    
    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Data Barang</h1>
    <a href="tambah_barang.php"class = "btn btn-primary"> Tambah Barang </a> 
    <table class="table" border="1">
        <thead class="table-light">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($barang as $brg) { ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $brg['id_barang'];?></td>
            <td><?= $brg['nama_barang'];?></td>
            <td><?= $brg['harga'];?></td>
            <td><?= $brg['stok'];?></td>
            <td><?= $brg['id_supplier'];?></td>
            <td>
                <a href="ubah_barang.php?id=<?php echo $brg['id_barang']; ?>">Edit</a> |
                <a href="hapus_barang.php?id=<?php echo $brg['id_barang']; ?>">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
        </thead>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




