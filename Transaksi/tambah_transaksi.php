<?php
require '../Functions/functions.php';

if (isset($_POST['tambah'])) {
    if (tambah_transaksi($_POST) > 0) {
        echo "<script>
                alert('Data Transaksi Berhasil Ditambahkan');
                document.location.href='data_transaksi.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Transaksi Gagal Ditambahkan');
                document.location.href='tambah_transaksi.php';
            </script>";
    }
}

$barang = query("SELECT * FROM barang");
$pembeli = query("SELECT * FROM pembeli");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php echo generateNavigation(); ?>

<h1 class="display-2">Tambah Data Transaksi</h1>
<form action="" method="post">
    <div class="mb-3">
        <label for="id_barang" class="form-label">ID Barang:</label>
        <select name="id_barang" id="id_barang" class="form-control" required>
            <?php foreach ($barang as $b) : ?>
                <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="id_pembeli" class="form-label">ID Pembeli:</label>
        <select name="id_pembeli" id="id_pembeli" class="form-control" required>
            <?php foreach ($pembeli as $p) : ?>
                <option value="<?= $p['id_pembeli']; ?>"><?= $p['nama_pembeli']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan:</label>
        <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
    </div>
    <button type="submit" name="tambah" class="btn btn-dark">Tambah Data</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
