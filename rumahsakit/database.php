<?php
class Database {
    // Properti enkapsulasi untuk menyimpan kredensial database
    private $host = "localhost";
    private $username = "root";
    private $password = ""; // Kosongkan jika menggunakan XAMPP default
    private $database = "db_rumahsakit";
    public $conn;

    // Constructor otomatis berjalan saat objek Class ini dibuat (di-instansiasi)
    public function __construct() {
        // Membuat koneksi ke MySQL menggunakan ekstensi MySQLi dengan gaya OOP
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah terjadi kesalahan/error saat koneksi
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
        
        // Menampilkan pesan sukses jika berhasil terhubung
        echo "Koneksi sukses! Berhasil terhubung ke database: " . $this->database . "\n";
    }
}

// Melakukan instansiasi objek untuk menguji koneksi secara langsung
$db = new Database();
?>