<?php
require '../Functions/functions.php';

// Form processing for adding new supplier
if (isset($_POST['submit'])) {
    if (tambah_supplier($_POST) > 0) {
        echo "<script>
            alert('Data Supplier Berhasil Ditambahkan');
            document.location.href='data_supplier.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Supplier Gagal Ditambahkan');
            document.location.href='data_supplier.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   
    <?php echo generateNavigation(); ?>

    <h1 class="display-2">Tambah Data Supplier</h1>
    <form action="" method="post">
    <div class="mb-3">
        <label for="nama_supplier" class="form-label">Nama Supplier:</label>
        <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No. Telepon:</label>
        <input type="text" name="no_telp" id="no_telp" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <input type="text" name="alamat" id="alamat" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
