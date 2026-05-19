<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet san pham</title>
</head>
<body>
    <h1>Product Detail: <?= htmlspecialchars($id ?? '') ?></h1>
    <p><a href="<?= $this->url('product') ?>">Quay lai danh sach san pham</a></p>
</body>
</html>
