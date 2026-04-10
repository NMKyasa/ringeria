<?php
session_start();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container checkout-page">

    <!-- HEADER -->
    <div class="checkout-header text-center">
        <h2>Checkout</h2>
        <p>Complete your order and get your perfect ring</p>
    </div>

    <?php if (empty($_SESSION['cart'])): ?>

        <div class="empty-checkout text-center">
            <p>Your cart is empty.</p>
            <a href="index.php#wedding-rings" class="btn btn-gold mt-3">
                Browse Rings
            </a>
        </div>

    <?php else: ?>

        <!-- ORDER SUMMARY -->
        <div class="checkout-summary">

            <h5 class="mb-3">Order Summary</h5>

            <ul class="list-group mb-3">
                <?php 
                $total = 0;
                foreach ($_SESSION['cart'] as $item): 
                    $total += $item['price'];
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><?= $item['name'] ?></span>
                        <strong>$<?= number_format($item['price']) ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- TOTAL -->
            <div class="checkout-total">
                <h4>Total: <span>$<?= number_format($total) ?></span></h4>
            </div>

        </div>

        <!-- CONTACT / PAYMENT -->
        <div class="checkout-contact mt-4 text-center">

            <h5>Complete Your Purchase</h5>

            <p>
                To place your order, contact us via call or WhatsApp:
            </p>

            <h4 class="phone-number">+256 785831141</h4>

            <p>
                📍 Pioneer Mall, Shop PD100 <br>
                Kampala, Uganda
            </p>

        </div>

        <!-- ACTIONS -->
        <div class="checkout-actions text-center mt-4">

            <a href="index.php" class="btn btn-outline-dark">
                ← Continue Shopping
            </a>

            <button class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#mobileMoneyModal">
                Pay with Mobile Money
            </button>

        </div>

    <?php endif; ?>

</div>

<!-- MOBILE MONEY MODAL -->
<div class="modal fade" id="mobileMoneyModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Mobile Money Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <p class="mb-3">
          Send payment to the number below:
        </p>

        <h4 class="mb-3">+256 785831141</h4>

        <p>
          Use your name as reference when sending payment.
        </p>

        <hr>

        <p><strong>Total Amount:</strong></p>
        <h3>$<?= number_format($total) ?></h3>

        <p class="mt-3">
          After payment, please contact us via WhatsApp to confirm your order.
        </p>

        <a href="https://wa.me/256785831141" target="_blank" class="btn btn-success mt-2">
          Confirm via WhatsApp
        </a>

      </div>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>