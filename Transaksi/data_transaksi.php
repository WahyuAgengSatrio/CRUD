<?php
require '../Functions/functions.php';

$transaksi = query("SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<?php echo generateNavigation(); ?>

    <h1 class="display-2">Data Transaksi</h1>
    <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table" border="1">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>ID Barang</th>
                <th>ID Pembeli</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($transaksi as $trx) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $trx['id_transaksi']; ?></td>
                    <td><?= $trx['id_barang']; ?></td>
                    <td><?= $trx['id_pembeli']; ?></td>
                    <td><?= $trx['tanggal']; ?></td>
                    <td><?= $trx['keterangan']; ?></td>
                    <td>
                <a href="ubah_transaksi.php?id=<?= $trx['id_transaksi']; ?>">Edit</a> |
                <a href="hapus_transaksi.php?id=<?= $trx['id_transaksi']; ?>">Delete</a>
            </td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
