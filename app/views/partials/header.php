<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= $this->url('home') ?>">QL Sinh Vien</a>
        <nav class="nav">
            <a href="<?= $this->url('home') ?>">Trang chu</a>
            <a href="<?= $this->url('sinhvien') ?>">Sinh vien</a>
            <a href="<?= $this->url('home/about') ?>">Gioi thieu</a>
            <?php if (!empty($_SESSION['user'])): ?>
                <a href="<?= $this->url('auth/logout') ?>">Dang xuat</a>
            <?php else: ?>
                <a href="<?= $this->url('auth/login') ?>">Dang nhap</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
