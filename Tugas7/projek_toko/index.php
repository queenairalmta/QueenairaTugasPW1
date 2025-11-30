<?php
$config = require 'config.php';
require 'database.php';
require 'produk.php';

$db = new Database($config);
$produk = new Produk($db->getKoneksi());
$data = $produk->tampilkanProduk();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Produk Toko</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Produk Toko</h2>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Tanggal Masuk</th>
  </tr>

  <?php
  $no = 1;
  foreach ($data as $d) {
  ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama_produk'] ?></td>
    <td><?= $d['kategori'] ?></td>
    <td>Rp <?= number_format($d['harga']) ?></td>
    <td><?= $d['stok'] ?></td>
    <td><?= $d['tanggal_masuk'] ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>