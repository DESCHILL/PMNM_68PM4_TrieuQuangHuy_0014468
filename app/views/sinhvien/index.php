<section class="container page-panel">
    <div class="toolbar">
        <div>
            <h1>Danh sach sinh vien</h1>
            <p>Quan ly thong tin sinh vien trong he thong.</p>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Ma SV</th>
                    <th>Ho ten</th>
                    <th>Email</th>
                    <th>So dien thoai</th>
                    <th>Lop</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($students)): ?>
                    <tr>
                        <td class="empty-state" colspan="5">Chua co du lieu sinh vien.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= htmlspecialchars($student['masv'] ?? $student['id'] ?? '') ?></td>
                            <td><?= htmlspecialchars($student['hoten'] ?? $student['name'] ?? '') ?></td>
                            <td><?= htmlspecialchars($student['email'] ?? '') ?></td>
                            <td><?= htmlspecialchars($student['sodienthoai'] ?? $student['phone'] ?? '') ?></td>
                            <td><?= htmlspecialchars($student['lop'] ?? $student['class'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
