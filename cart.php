<?php
session_start(); // 🔥 MUST BE FIRST LINE

// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// ADD TO CART
if (isset($_POST['add_to_cart'])) {
    $item = [
        "name" => $_POST['name'],
        "price" => (int) $_POST['price']
    ];

    $_SESSION['cart'][] = $item;

    header("Location: cart.php");
    exit();
}

// REMOVE ITEM
if (isset($_GET['remove'])) {
    unset($_SESSION['cart'][$_GET['remove']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);

    header("Location: cart.php");
    exit();
}
?>


 <?php include 'includes/header.php'; ?>
 <?php include 'includes/navbar.php'; ?>

<div class="container cart-page">

    <div class="cart-header text-center">
        <h2>Your Shopping Cart</h2>
        <p>Review your selected rings before checkout</p>
    </div>

    <?php if (empty($_SESSION['cart'])): ?>
        
        <div class="empty-cart text-center">
            <p>Your cart is currently empty.</p>
            <a href="index.php#wedding-rings" class="btn btn-gold mt-3">
                Browse Rings
            </a>
        </div>

    <?php else: ?>

        <div class="cart-table-wrapper">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price (UGX)</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <tr>
                            <td class="product-name"><?= $item['name'] ?></td>
                            <td class="product-price">$<?= number_format($item['price']) ?></td>
                            <td>
                                <a href="cart.php?remove=<?= $index ?>" class="btn btn-remove btn-sm">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php $total = 0;

            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    $total += $item['price'];
                }
            } 
        ?>

        <!-- TOTAL -->
        <div class="cart-summary">
            <h4>Total: <span>$<?= number_format($total) ?></span></h4>

            <div class="cart-actions mt-3">
                <a href="index.php" class="btn btn-outline-dark">
                    ← Continue Shopping
                </a>

                <a href="checkout.php" class="btn btn-gold">
                    Proceed to Checkout →
                </a>
            </div>
        </div>

    <?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>