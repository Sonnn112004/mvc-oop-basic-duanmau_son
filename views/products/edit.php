<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include_once 'views/layouts/menu.php'; ?>
    <div class="container">
        <h1 class="my-4">Edit Product</h1>
        <form action="index.php?url=edit-product&id=<?= $product['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="<?= $product['price'] ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <?php if ($product['image']): ?>
                <img src="<?= BASE_URL ?>uploads/imgproduct/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="100" class="mt-2">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>
</html>
