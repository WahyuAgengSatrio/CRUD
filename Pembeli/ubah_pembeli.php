<?php
require '../Functions/functions.php';

// Assuming you have a function to get pembeli details by ID
if (isset($_GET['id'])) {
    $id_pembeli = $_GET['id'];
    $pembeli = query("SELECT * FROM pembeli WHERE id_pembeli = $id_pembeli")[0];
} else {
    // Redirect or handle the case when no ID is provided
    header("Location: data_pembeli.php");
    exit();
}

if (isset($_POST['update'])) {
    if (ubah_pembeli($_POST) > 0) {
        echo "<script>
            alert('Data Pembeli Berhasil Diubah');
            document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Pembeli Gagal Diubah');
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
    <title>Edit Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  
<?php echo generateNavigation(); ?>

    <h1 class="display-2">Edit Data Pembeli</h1>
   <form action="" method="post">
    <input type="hidden" name="id_pembeli" value="<?= $pembeli['id_pembeli']; ?>">
    <div class="mb-3">
        <label for="nama_pembeli" class="form-label">Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" id="nama_pembeli" value="<?= $pembeli['nama_pembeli']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jk" class="form-label">Jenis Kelamin:</label>
        <input type="text" name="jk" id="jk" value="<?= $pembeli['jk']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No. Telepon:</label>
        <input type="text" name="no_telp" id="no_telp" value="<?= $pembeli['no_telp']; ?>" class="form-control" required>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update Data</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
