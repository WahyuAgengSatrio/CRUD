<?php
require '../Functions/functions.php';

if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    $transaksi_to_edit = query("SELECT * FROM transaksi WHERE id_transaksi = $id_transaksi")[0];
} else {
    // Redirect or handle the case when no ID is provided
    header("Location: data_transaksi.php");
    exit();
}

if (isset($_POST['update'])) {
    if (update_transaksi($_POST) > 0) {
        echo "<script>
            alert('Data Transaksi Berhasil Diubah');
            document.location.href='data_transaksi.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Transaksi Gagal Diubah');
            document.location.href='data_transaksi.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Edit Data Transaksi</h1>
    <form action="" method="post">
    <input type="hidden" name="id_transaksi" value="<?= $transaksi_to_edit['id_transaksi']; ?>">

    <div class="mb-3">
        <label for="id_barang" class="form-label">ID Barang:</label>
        <input type="text" name="id_barang" id="id_barang" class="form-control" value="<?= $transaksi_to_edit['id_barang']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="id_pembeli" class="form-label">ID Pembeli:</label>
        <input type="text" name="id_pembeli" id="id_pembeli" class="form-control" value="<?= $transaksi_to_edit['id_pembeli']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $transaksi_to_edit['tanggal']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan:</label>
        <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $transaksi_to_edit['keterangan']; ?>" required>
    </div>

    <button type="submit" name="update" class="btn btn-primary">Update Data</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
