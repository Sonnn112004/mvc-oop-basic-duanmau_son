<?php 
// Require toàn bộ các file khai báo môi trường, thực thi,...(không require view)

// Kiểm tra xem yêu cầu có phải là một tệp hoặc thư mục hiện có hay không
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // Phục vụ tệp được yêu cầu.
}

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/ProductController.php';
require_once './controllers/UserController.php';

// Require toàn bộ file Models
require_once './models/ProductModel.php';
require_once './models/UserModel.php';

// Route
$url = $_GET['url'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($url) {
    // Trang chủ
    '/' => (new ProductController())->Home(),
    'list-products' => (new ProductController())->listProducts(),
    'add-product' => (new ProductController())->addProduct(),
    'edit-product' => (new ProductController())->editProduct(),
    'delete-product' => (new ProductController())->deleteProduct(),

    // Users
    'list-users' => (new UserController())->listUsers(),
};
