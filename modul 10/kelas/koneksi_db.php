<?php
class Koneksi_db 
{

    private $host     = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "nama_database_mu"; 
    
    private $con = false;
    private $myconn;

    public function connect() 
    {
        if (!$this->con) {
            $this->myconn = new mysqli($this->host, $this->username, $this->password, $this->database);
  
            if ($this->myconn->connect_error) {
                $this->con = false;
                return false;
            } else {
                $this->con = true;
                return true;
            }
        } else {
 
            return true; 
        }
    }

    public function disconnect() 
    {
        if ($this->con) {
            if ($this->myconn->close()) {
                $this->con = false;
                return true;
            } else {
                return false;
            }
        }
    }
    
    public function getKoneksi() 
    {
        return $this->myconn;
    }
}