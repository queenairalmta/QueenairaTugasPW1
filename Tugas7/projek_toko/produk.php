<?php
class Produk {
  private $db;

  public function __construct($koneksi) {
    $this->db = $koneksi;
  }

  public function tampilkanProduk() {
    $query = $this->db->query("SELECT * FROM produk");
    return $query->fetchAll();
  }
}