<?php
class Database {
  private $koneksi;

  public function __construct($config) {
    try {
      $this->koneksi = new PDO(
        "mysql:host=".$config['host'].";dbname=".$config['dbname'],
        $config['user'],
        $config['pass']
      );
    } catch (PDOException $e) {
      die("Koneksi gagal: " . $e->getMessage());
    }
  }

  public function getKoneksi() {
    return $this->koneksi;
  }
}