<?php
$title = $title ?? 'Quan ly sinh vien';
$styles = $styles ?? [];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="<?= $this->url('assets/css/app.css') ?>">
    <?php foreach ($styles as $style): ?>
        <link rel="stylesheet" href="<?= $this->url($style) ?>">
    <?php endforeach; ?>
</head>
<body>
    <?php require_once '../app/views/partials/header.php'; ?>

    <main class="page-content">
        <?php require_once $viewPath; ?>
    </main>

    <?php require_once '../app/views/partials/footer.php'; ?>
</body>
</html>
