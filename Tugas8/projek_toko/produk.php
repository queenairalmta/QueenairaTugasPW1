<?php
require "config.php";

class Produk extends Database {

    public function tampil() {
        return $this->conn->query("SELECT * FROM produk");
    }

    public function tambah($nama, $kategori, $harga, $stok, $tanggal) {
        return $this->conn->query("INSERT INTO produk VALUES ('', '$nama', '$kategori', '$harga', '$stok', '$tanggal')");
    }

    public function edit($id) {
        return $this->conn->query("SELECT * FROM produk WHERE id='$id'")->fetch_assoc();
    }

    public function update($id, $nama, $kategori, $harga, $stok, $tanggal) {
        return $this->conn->query(
            "UPDATE produk SET 
            nama_produk='$nama', 
            kategori='$kategori', 
            harga='$harga', 
            stok='$stok', 
            tanggal_masuk='$tanggal'
            WHERE id='$id'"
        );
    }

    public function hapus($id) {
        return $this->conn->query("DELETE FROM produk WHERE id='$id'");
    }
}
?>