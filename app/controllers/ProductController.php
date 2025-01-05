<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $products = Product::all();
        include __DIR__ . '/../views/products/index.php';
    }
}
