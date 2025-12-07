<?php
require "Produk.php";
$produk = new Produk();
$data = $produk->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Toko</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function konfirmasi(id) {
            if(confirm("Yakin ingin menghapus data ini?")) {
                window.location.href = "hapus.php?id=" + id;
            }
        }
    </script>
</head>
<body>

<h2>Data Produk Toko</h2>
<a href="tambah.php" class="btn-tambah">+ Tambah Data</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; while($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_produk'] ?></td>
        <td><?= $row['kategori'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td><?= $row['stok'] ?></td>
        <td><?= $row['tanggal_masuk'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
            <button onclick="konfirmasi(<?= $row['id'] ?>)" class="btn-hapus">Hapus</button>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>