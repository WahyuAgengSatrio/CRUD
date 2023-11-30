<?php
require '../Functions/functions.php';
$supplier = query("SELECT * FROM supplier");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$barang = query("SELECT * FROM barang WHERE id_barang = $id")[0];

if (isset($_POST["ubah"])) {
    // Gunakan fungsi ubah_barang
    if (ubah_barang($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href='data_barang.php';                        
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diubah');
            document.location.href='data_barang.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Edit Barang</title>
</head>
<body>
    
<?php echo generateNavigation(); ?>

    <h1>Edit Data Barang</h1>
    <form action="" method="post">
    <!-- Menambahkan input tersembunyi untuk ID barang -->
    <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= $barang['nama_barang']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga Barang:</label>
        <input type="number" name="harga" id="harga" class="form-control" value="<?= $barang['harga']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok Barang:</label>
        <input type="number" name="stok" id="stok" class="form-control" value="<?= $barang['stok']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="id_supplier" class="form-label">ID Supplier:</label>
        <select name="id_supplier" id="id_supplier" class="form-control">
            <?php foreach ($supplier as $s) :?>
                <option value="<?= $s['id_supplier']; ?>" <?= ($s['id_supplier'] == $barang['id_supplier']) ? 'selected' : ''; ?>>
                    <?= $s['nama_supplier'];?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <!-- Menambahkan nama untuk tombol submit -->
    <button type="submit" name="ubah" class="btn btn-primary">Edit Data</button>
</form>

</body>
</html>
