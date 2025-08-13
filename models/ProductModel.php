<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllProduct()
    {
        try {
            $sql = "SELECT * FROM products";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insertProduct($name, $price, $image)
    {
        try {
            $sql = "INSERT INTO products (name, price, image) VALUES (:name, :price, :image)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':name' => $name, ':price' => $price, ':image' => $image]);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getProductById($id)
    {
        try {
            $sql = "SELECT * FROM products WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function updateProduct($id, $name, $price, $image)
    {
        try {
            $sql = "UPDATE products SET name = :name, price = :price, image = :image WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id, ':name' => $name, ':price' => $price, ':image' => $image]);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteProductById($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
