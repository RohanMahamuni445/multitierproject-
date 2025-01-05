<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= htmlspecialchars($product['name']) ?> - <?= htmlspecialchars($product['price']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
