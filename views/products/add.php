<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include_once 'views/layouts/menu.php'; ?>
    <div class="container">
        <h1 class="my-4">Add New Product</h1>
        <form action="index.php?url=add-product" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
