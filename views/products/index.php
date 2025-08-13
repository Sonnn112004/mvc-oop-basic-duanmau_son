<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include_once 'views/layouts/menu.php'; ?>
    <div class="container">
        <h1 class="my-4">Product List</h1>
        <a href="index.php?url=add-product" class="btn btn-primary mb-3">Add New Product</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= number_format($product['price'], 2) ?></td>
                    <td>
                        <?php if ($product['image']): ?>
                        <img src="<?= BASE_URL ?>uploads/imgproduct/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="index.php?url=edit-product&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?url=delete-product&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
