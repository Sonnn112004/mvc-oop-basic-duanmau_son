<nav>
    <ul>
        <li><a href="index.php" class="<?php echo empty($_GET['url']) ? 'active' : ''; ?>">Trang chủ</a></li>
        <li><a href="index.php?url=list-products" class="products <?php echo ($_GET['url'] ?? '') == 'list-products' ? 'active' : ''; ?>">Sản phẩm</a></li>
        <li><a href="index.php?url=about" class="<?php echo ($_GET['url'] ?? '') == 'about' ? 'active' : ''; ?>">Giới thiệu</a></li>
        <li><a href="index.php?url=contact" class="<?php echo ($_GET['url'] ?? '') == 'contact' ? 'active' : ''; ?>">Liên hệ</a></li>
        <li><a href="index.php?url=list-users" class="<?php echo ($_GET['url'] ?? '') == 'list-users' ? 'active' : ''; ?>">Người dùng</a></li>
    </ul>
</nav>
