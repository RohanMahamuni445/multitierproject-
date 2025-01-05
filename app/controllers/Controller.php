<?php
require_once '../data/Database.php';

class Controller {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Ensure that getData() passes a valid query string to fetchData()
    public function getData() {
        // Define the query you want to run
        $query = "SELECT * FROM content";
        
        // Pass the query to fetchData() method
        return $this->db->fetchData($query);  // Correctly passing the query
    }
}
?>
