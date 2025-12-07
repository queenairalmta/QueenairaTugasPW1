<?php
require "Produk.php";
$produk = new Produk();

if(isset($_POST['simpan'])) {
    $produk->tambah(
        $_POST['nama'],
        $_POST['kategori'],
        $_POST['harga'],
        $_POST['stok'],
        $_POST['tanggal']
    );
    header("Location: index.php");
}
?>

<h2>Tambah Produk</h2>
<form method="post">
    Nama Produk <input type="text" name="nama"><br>
    Kategori <input type="text" name="kategori"><br>
    Harga <input type="number" name="harga"><br>
    Stok <input type="number" name="stok"><br>
    Tanggal <input type="date" name="tanggal"><br>
    <button name="simpan">Simpan</button>
</form>