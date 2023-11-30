<?php
require '../Functions/functions.php';

if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    if (hapus_transaksi($id_transaksi) > 0) {
        echo "<script>
            alert('Data Transaksi Berhasil Dihapus');
            document.location.href='data_transaksi.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Transaksi Gagal Dihapus');
            document.location.href='data_transaksi.php';
        </script>";
    }
} else {
    // Redirect or handle the case when no ID is provided
    header("Location: data_transaksi.php");
    exit();
}
?>
