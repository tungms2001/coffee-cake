<?php
class Database {
    private $conn = NULL;
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "coffeecake";

    public function connect() {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8");
    }

    public function query($query) {
        return $this->conn->query($query);
    }

    public function disconnect() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}