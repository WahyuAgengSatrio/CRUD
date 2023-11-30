<?php
require '../Functions/functions.php';
$supplier = query("SELECT * FROM supplier");
if(isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='data_barang.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
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

    <title>Tambah barang</title>
</head>
<body>
    
<?php echo generateNavigation(); ?>

    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Brang:</label>
            <input type="text" name="nama" id="nama"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Harga Brang:</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Stok Brang:</label>
            <input type="number" name="stok" id="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_supplier" class="form-label">ID Supplier :</label>
            <select name="id_supplier" id="id_supplier"  class="form-control">
                <?php foreach ($supplier as $s) :?>
                <option value="<?= $s['id_supplier']; ?>">
                <?= $s['nama_supplier'];?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    </form>
</body>
</html>