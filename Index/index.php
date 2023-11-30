<?php
require '../Functions/functions.php';

// You can fetch other data as needed
$barang = query("SELECT * FROM barang");
$pembeli = query("SELECT * FROM pembeli");
$transaksi = query("SELECT * FROM transaksi");
$pembayaran = query("SELECT * FROM pembayaran");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   
    
<?php echo generateNavigation(); ?>
    
   <!-- Main Body Content -->
<div class="container mt-5">
    <div class="row">
        <!-- Product Listing -->
        <div class="col-md-7">
            <h2>Product Listing</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $product) : ?>
                        <tr>
                            <td><?= $product['id_barang']; ?></td>
                            <td><?= $product['nama_barang']; ?></td>
                            <td><?= $product['harga']; ?></td>
                            <td><?= $product['stok']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Transaction Details -->
        <div class="col-md-5">
            <h2>Transaction Details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Barang</th>
                        <th>ID Pembeli</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $transaction) : ?>
                        <tr>
                            <td><?= $transaction['id_transaksi']; ?></td>
                            <td><?= $transaction['id_barang']; ?></td>
                            <!-- Additional fields -->
                            <td><?= $transaction['id_pembeli'] ?? ''; ?></td>
                            <td><?= $transaction['tanggal'] ?? ''; ?></td>
                            <td><?= $transaction['keterangan'] ?? ''; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Tambahkan link ke script JavaScript -->
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
