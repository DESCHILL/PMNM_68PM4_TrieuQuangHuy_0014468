<?php
$title = $title ?? 'Dang nhap';
$styles = $styles ?? ['assets/css/login.css'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <?php foreach ($styles as $style): ?>
        <link rel="stylesheet" href="<?= $this->url($style) ?>">
    <?php endforeach; ?>
</head>
<body>
    <?php require_once $viewPath; ?>
</body>
</html>
