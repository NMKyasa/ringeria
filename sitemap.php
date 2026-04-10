<?php
session_start();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container sitemap-page">

    <!-- TITLE -->
    <div class="text-center pb-4">
        <h2>Website Sitemap</h2>
        <p>Explore the structure of the Ringeria e-commerce platform</p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="sitemap-box">

                <ul class="sitemap-list">

                    <li><strong>Home</strong> (index.php)</li>

                    <li>
                        <strong>Product Categories</strong>
                        <ul>
                            <li>Wedding Rings (index.php#wedding-rings)</li>
                            <li>Engagement Rings (index.php#engagement-rings)</li>
                            <li>Gold Rings (index.php#gold-rings)</li>
                            <li>Silver Rings (index.php#silver-rings)</li>
                        </ul>
                    </li>

                    <li><strong>Cart</strong> (cart.php)</li>
                    <li><strong>Checkout</strong> (checkout.php)</li>

                    <li>
                        <strong>Customer Support</strong>
                        <ul>
                            <li>FAQ (index.php#faq)</li>
                            <li>Contact (index.php#contact)</li>
                        </ul>
                    </li>

                    <li><strong>Sitemap</strong> (sitemap.php)</li>

                </ul>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>