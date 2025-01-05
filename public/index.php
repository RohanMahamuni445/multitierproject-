<?php
require_once 'model.php';

$model = new Model();
$content = $model->getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multitier PHP Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Welcome to Our PHP Project</h1>
</header>

<div class="container">
    <section>
        <h2>Our Content</h2>
        <?php if (!empty($content)): ?>
            <?php foreach ($content as $item): ?>
                <div class="content-item">
                    <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8')); ?></p>
                    <img src="<?php echo htmlspecialchars($item['image_url'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No content available.</p>
        <?php endif; ?>
    </section>
</div>

<footer>
    <p>&copy; 2025 Multitier PHP Project</p>
</footer>

</body>
</html>
