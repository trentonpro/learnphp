<?php

namespace App;

use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:" . __DIR__ . '/../db.sqlite');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all() {
        $sql = "SELECT * FROM articles";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_OBJ);
        return $result->fetchAll();
    }
}
