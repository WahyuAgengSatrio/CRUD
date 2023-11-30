<?php
require '../Functions/functions.php';

if (isset($_POST['tambah'])) {
    if (tambah_pembeli($_POST) > 0) {
        echo "<script>
            alert('Data Pembeli Berhasil Ditambahkan');
            document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Pembeli Gagal Ditambahkan');
            document.location.href='data_pembeli.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   
<?php echo generateNavigation(); ?>

    <h1 class="display-2">Tambah Data Pembeli</h1>
    <form action="" method="post">
    <div class="mb-3">
        <label for="nama_pembeli" class="form-label">Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jk" class="form-label">Jenis Kelamin:</label>
        <input type="text" name="jk" id="jk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No. Telepon:</label>
        <input type="text" name="no_telp" id="no_telp" class="form-control" required>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
