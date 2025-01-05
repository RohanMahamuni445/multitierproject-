<?php
require_once '../config/config.php';

class Database {
    private $connection;

    public function __construct() {
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    // Add fetchData() method to fetch data from a given table
    public function fetchData($query) {
        $result = $this->connection->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>
