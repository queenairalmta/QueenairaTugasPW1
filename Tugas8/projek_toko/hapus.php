<?php
require "Produk.php";
$produk = new Produk();
$produk->hapus($_GET['id']);
header("Location: index.php");
?>