<div class="container">
    <div class="login-wrapper">
        <section class="login-banner">
            <h1>Chao mung tro lai</h1>
            <p>Dang nhap de quan ly san pham, theo doi thong tin va tiep tuc lam viec voi he thong.</p>
        </section>

        <section class="login-form">
            <h2>Dang nhap</h2>
            <p class="subtitle">Nhap thong tin tai khoan cua ban.</p>

            <?php if (!empty($error)): ?>
                <div class="alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form action="<?= $this->url('auth/login') ?>" method="post">
                <div class="form-group">
                    <label for="username">Ten dang nhap</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Nhap ten dang nhap"
                        value="<?= htmlspecialchars($username ?? '') ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Mat khau</label>
                    <input type="password" id="password" name="password" placeholder="Nhap mat khau" required>
                </div>

                <div class="form-options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        <span>Ghi nho dang nhap</span>
                    </label>
                    <a href="#">Quen mat khau?</a>
                </div>

                <button type="submit">Dang nhap</button>
            </form>

            <p class="register-text">Tai khoan demo: <strong>admin</strong> / <strong>123456</strong></p>
        </section>
    </div>
</div>
