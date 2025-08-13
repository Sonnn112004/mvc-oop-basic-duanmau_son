<?php include 'layouts/header.php'; ?>
<?php include 'layouts/menu.php'; ?>

<h1>Cửa hàng rượu</h1>
<div class="products">
    <?php foreach($products as $product): ?>
    <div class="product">
        <img src="uploads/imgproduct/<?php echo $product['image']; ?>" alt="" width="100px">
        <h3><?php echo $product['name']; ?></h3>
        <p><?php echo number_format($product['price']); ?> VNĐ</p>
        <p><?php echo $product['description']; ?></p>
    </div>
    <?php endforeach; ?>
</div>

<?php include 'layouts/footer.php'; ?>
