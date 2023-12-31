<?php
function koneksi(){
    $conn = mysqli_connect("localhost","root","","penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function generateNavigation() {
    return '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../Index/index.php">Wahyu AS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../Barang/data_barang.php">Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pembeli\data_pembeli.php">Data Pembeli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Supplier\data_supplier.php">Data Supplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Transaksi\data_transaksi.php">Data Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pembayaran\data_pembayaran.php">Data Pembayaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
}
function tambah_barang($data){
    $conn = koneksi();
    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];
    

    $sql = "INSERT INTO barang VALUES (null, '$nama' , '$harga' , '$stok' , '$id_supplier')";

    mysqli_query($conn, $sql); 
    return mysqli_affected_rows($conn);

}

function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id'");
    return mysqli_affected_rows($conn);
}



function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id_barang'];
    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET nama_barang = '$nama', harga = '$harga', stok = '$stok', id_supplier = '$id_supplier' WHERE id_barang = $id";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_pembeli($data) {
    $conn = koneksi();
    $nama_pembeli = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];

    $sql = "INSERT INTO pembeli VALUES (null, '$nama_pembeli', '$jk', '$no_telp')";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function ubah_pembeli($data) {
    $conn = koneksi();
    $id_pembeli = $data['id_pembeli'];
    $nama_pembeli = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];

    $sql = "UPDATE pembeli SET nama_pembeli = '$nama_pembeli', jk = '$jk', no_telp = '$no_telp' WHERE id_pembeli = $id_pembeli";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function hapus_pembeli($id_pembeli) {
    $conn = koneksi();

    $sql = "DELETE FROM pembeli WHERE id_pembeli = $id_pembeli";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_supplier($data) {
    $conn = koneksi();
    $nama_supplier = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO supplier VALUES (null, '$nama_supplier', '$no_telp', '$alamat')";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function ubah_supplier($data) {
    $conn = koneksi();
    $id_supplier = $data['id_supplier'];
    $nama_supplier = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "UPDATE supplier SET nama_supplier = '$nama_supplier', no_telp = '$no_telp', alamat = '$alamat' WHERE id_supplier = $id_supplier";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}


function hapus_supplier($id_supplier) {
    $conn = koneksi();

    $sql = "DELETE FROM supplier WHERE id_supplier = $id_supplier";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

// functions.php

function tambah_transaksi($data) {
    $conn = koneksi();

    $id_barang = $data['id_barang'];
    $id_pembeli = $data['id_pembeli'];
    $tanggal = $data['tanggal'];
    $keterangan = $data['keterangan'];

    $sql = "INSERT INTO transaksi (id_barang, id_pembeli, tanggal, keterangan) 
            VALUES ('$id_barang', '$id_pembeli', '$tanggal', '$keterangan')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function update_transaksi($data) {
    $conn = koneksi();
    $id_transaksi = $data['id_transaksi'];
    $id_barang = $data['id_barang'];
    $id_pembeli = $data['id_pembeli'];
    $tanggal = $data['tanggal'];
    $keterangan = $data['keterangan'];

    $sql = "UPDATE transaksi SET id_barang = '$id_barang', id_pembeli = '$id_pembeli', tanggal = '$tanggal', keterangan = '$keterangan' WHERE id_transaksi = $id_transaksi";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function hapus_transaksi($id_transaksi) {
    $conn = koneksi();
    
    // Prevent SQL Injection
    $id_transaksi = mysqli_real_escape_string($conn, $id_transaksi);

    $sql = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}



?>