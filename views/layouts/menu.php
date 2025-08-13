<nav>
    <ul>
        <li><a href="/" class="<?php echo ($_GET['url'] ?? '/') == '/' ? 'active' : ''; ?>">Trang chủ</a></li>
        <li><a href="index.php?url=list-products" class="products <?php echo ($_GET['url'] ?? '') == 'list-products' ? 'active' : ''; ?>">Sản phẩm</a></li>
        <li><a href="/about" class="<?php echo ($_GET['url'] ?? '') == 'about' ? 'active' : ''; ?>">Giới thiệu</a></li>
        <li><a href="/contact" class="<?php echo ($_GET['url'] ?? '') == 'contact' ? 'active' : ''; ?>">Liên hệ</a></li>
    </ul>
</nav>
