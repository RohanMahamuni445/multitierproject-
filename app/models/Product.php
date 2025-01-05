<?php
namespace App\Models;

use PDO;

class Product
{
    public static function all()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
