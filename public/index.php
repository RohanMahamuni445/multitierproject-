<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->index();
