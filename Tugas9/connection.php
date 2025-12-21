<?php
class connection {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "db_login");

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}