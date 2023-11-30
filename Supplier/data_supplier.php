<?php
require '../Functions/functions.php';

$supplier = query("SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

     
    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Data Supplier</h1>
    <a href="tambah_supplier.php" class="btn btn-primary">Tambah Supplier</a>
    <table class="table" border="1">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>ID Supplier</th>
                <th>Nama Supplier</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($supplier as $sup) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $sup['id_supplier']; ?></td>
                    <td><?= $sup['nama_supplier']; ?></td>
                    <td><?= $sup['no_telp']; ?></td>
                    <td><?= $sup['alamat']; ?></td>
                    <td>
                <a href="ubah_supplier.php?id=<?= $sup['id_supplier']; ?>">Edit</a> |
                <a href="./hapus_supplier.php?id=<?= $sup['id_supplier']; ?>">Delete</a>
            </td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
