<?php
require '../Functions/functions.php';

$pembayaran = query("SELECT * FROM pembayaran");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

     
    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Data Pembayaran</h1>
    <table class="table" border="1">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>ID Pembayaran</th>
                <th>Tanggal Bayar</th>
                <th>Total Bayar</th>
                <th>ID Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pembayaran as $bayar) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $bayar['id_pembayaran']; ?></td>
                    <td><?= $bayar['tgl_bayar']; ?></td>
                    <td><?= $bayar['total_bayar']; ?></td>
                    <td><?= $bayar['id_transaksi']; ?></td>
                    <td>
                <a href="edit.php?id=<?= $brg['id_barang']; ?>">Edit</a> |
                <a href="delete.php?id=<?= $brg['id_barang']; ?>">Delete</a>
            </td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
