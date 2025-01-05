<?php
require_once 'C:\xampp\htdocs\multitierproject\app\controllers\Controller.php';

class Model {
    private $controller;

    public function __construct() {
        // Create an instance of Controller class
        $this->controller = new Controller();
    }

    // Define the getData() method to fetch data from the Controller
    public function getData() {
        // Call the Controller's method to fetch data
        return $this->controller->getData();
    }
}
?>
