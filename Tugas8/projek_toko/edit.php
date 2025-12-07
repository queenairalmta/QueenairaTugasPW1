<?php
require "Produk.php";
$produk = new Produk();

$data = $produk->edit($_GET['id']);

if(isset($_POST['update'])) {
    $produk->update(
        $_GET['id'],
        $_POST['nama'],
        $_POST['kategori'],
        $_POST['harga'],
        $_POST['stok'],
        $_POST['tanggal']
    );
    header("Location: index.php");
}
?>

<h2>Edit Produk</h2>
<form method="post">
    Nama Produk <input type="text" name="nama" value="<?= $data['nama_produk'] ?>"><br>
    Kategori <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br>
    Harga <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
    Stok <input type="number" name="stok" value="<?= $data['stok'] ?>"><br>
    Tanggal <input type="date" name="tanggal" value="<?= $data['tanggal_masuk'] ?>"><br>
    <button name="update">Update</button>
</form>