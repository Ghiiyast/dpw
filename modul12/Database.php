<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "db_praktik";
    public $conn;

        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->conn->connect_error) {
            die("Koneksi Database Gagal: " . $this->conn->connect_error);
        }
    }

    public function getDosenById($id) {
        $stmt = $this->conn->prepare("SELECT idDosen, namaDosen, noHP FROM t_dosen WHERE idDosen = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>