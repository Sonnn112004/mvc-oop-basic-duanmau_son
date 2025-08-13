<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        $products = $this->modelProduct->getAllProduct();
       
        require_once './views/Home.php';
    }

    public function listProducts()
    {
        $products = $this->modelProduct->getAllProduct();
        require_once './views/products/index.php';
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = '';

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image = basename($_FILES['image']['name']);
                $target_dir = "uploads/imgproduct/";
                $target_file = $target_dir . $image;
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }

            $this->modelProduct->insertProduct($name, $price, $image);
            header('Location: index.php?url=list-products');
        } else {
            require_once './views/products/add.php';
        }
    }

    public function deleteProduct()
    {
        $id = $_GET['id'];
        $this->modelProduct->deleteProductById($id);
        header('Location: index.php?url=list-products');
    }

    public function editProduct()
    {
        $id = $_GET['id'];
        $product = $this->modelProduct->getProductById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $product['image'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image = basename($_FILES['image']['name']);
                $target_dir = "uploads/imgproduct/";
                $target_file = $target_dir . $image;
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }

            $this->modelProduct->updateProduct($id, $name, $price, $image);
            header('Location: index.php?url=list-products');
        } else {
            require_once './views/products/edit.php';
        }
    }
}
