 <?php include 'includes/header.php'; ?>
 <?php include 'includes/navbar.php'; ?>
   
    <section id="billboard" class="position-relative overflow-hidden">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">

          <!-- SLIDE 1 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex align-items-center">

                <div class="col-md-6">
                  <div class="banner-content">

                    <h1 class="banner-title">
                      Premium Rings <br> for Every Occasion
                    </h1>

                    <p class="banner-subtitle">
                      Discover elegant wedding and engagement rings crafted in gold, silver, and tungsten.
                    </p>

                    <a href="index.php#wedding-rings" class="btn btn-gold">
                      Shop Collection
                    </a>

                  </div>
                </div>

                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="images/silver-wedding-ring6.JPG" alt="Silver Wedding Ring in Kampala, Uganda" class="img-fluid">
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- SLIDE 2 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex align-items-center">

                <div class="col-md-6">
                  <div class="banner-content">

                    <h1 class="banner-title">
                      Crafted for Love <br> & Style
                    </h1>

                    <p class="banner-subtitle">
                      Find the perfect ring for your special moments with timeless elegance.
                    </p>

                    <a href="index.php#engagement-rings" class="btn btn-gold">
                      Explore Rings
                    </a>

                  </div>
                </div>

                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver4.jpg" alt="Silver Engagement Ring" class="img-fluid">
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ARROWS -->
      <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left">
          <use xlink:href="#chevron-left" />
        </svg>
      </div>

      <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right">
          <use xlink:href="#chevron-right" />
        </svg>
      </div>
    </section>


    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Fast delivery</h3>
                <p>We offer fast delivery of wedding rings and engagement rings across Kampala and Uganda.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Premium Quality</h3>
                <p>Shop high-quality gold, silver, and tungsten rings from a trusted jewelry store in Kampala.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Affordable Prices</h3>
                <p>Buy affordable rings in Kampala with elegant designs perfect for weddings and engagements.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Secure Orders</h3>
                <p>Order rings online in Uganda safely through our trusted and customer-friendly process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================== Wedding Rings SECTION =============================== -->
    <section id="wedding-rings" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Wedding Rings</h2>
            <div class="btn-right">
              <a href="#wedding-rings" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring1.jpg" alt="Gold wedding Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">  
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Classic 18K Gold Band</a>
                    </h3>
                    <span class="item-price text-primary">$1,200</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring2.jpg" alt="Gold wedding Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="High Polish 18K Gold Ring">
                          <input type="hidden" name="price" value="1400">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">High Polish 18K Gold Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,400</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring3.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Matte Finish 18K Wedding Band">
                          <input type="hidden" name="price" value="1600">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Matte Finish 18K Wedding Band</a>
                    </h3>
                    <span class="item-price text-primary">$1,600</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring4.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Engraved Floral 18K Gold Ring">
                          <input type="hidden" name="price" value="1700">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Engraved Floral 18K Gold Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,700</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring5.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Luxury Comfort Fit 18K Ring">
                          <input type="hidden" name="price" value="1200">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Luxury Comfort Fit 18K Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,700</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring6.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Two-Tone 18K Gold Band">
                          <input type="hidden" name="price" value="2500">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Two-Tone 18K Gold Band</a>
                    </h3>
                    <span class="item-price text-primary">$2,500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring7.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Textured Finish 18K Ring">
                          <input type="hidden" name="price" value="1500">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Textured Finish 18K Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring8.jpg" alt="Gold wedding Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Milgrain 18K Wedding Band">
                          <input type="hidden" name="price" value="1300">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Milgrain 18K Wedding Band</a>
                    </h3>
                    <span class="item-price text-primary">$1,300</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
      <div class="product-prev swiper-arrow">
        <svg><use xlink:href="#chevron-left"></use></svg>
      </div>

      <div class="product-next swiper-arrow">
        <svg><use xlink:href="#chevron-right"></use></svg>
      </div>
    </section>

    <!-- ============================== ENGAGEMENT RINGS SECTION =============================== -->
         <section id="engagement-rings" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Engagement Rings</h2>
            <div class="btn-right">
              <a href="#" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-gold1.jpg" alt="Gold engagement Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">  
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Solitaire Diamond 14K Gold Ring">
                          <input type="hidden" name="price" value="1500">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Solitaire Diamond 14K Gold Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-gold2.jpg" alt="Gold engagement Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Halo Diamond Gold Ring">
                          <input type="hidden" name="price" value="2500">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Halo Diamond Gold Ring</a>
                    </h3>
                    <span class="item-price text-primary">$2,500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-gold3.jpg" alt="Gold engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Princess Cut Gold Engagement Ring">
                          <input type="hidden" name="price" value="1600">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Princess Cut Gold Engagement Ring</a>
                    </h3>
                    <span class="item-price text-primary">$1,600</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-gold4.jpg" alt="Gold engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Cushion Cut Diamond Ring">
                          <input type="hidden" name="price" value="1200">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Cushion Cut Diamond Ring</a>
                    </h3>
                    <span class="item-price text-primary">$2,800</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-gold5.jpg" alt="Gold engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Vintage Gold Engagement Ring">
                          <input type="hidden" name="price" value="2200">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Vintage Gold Engagement Ring</a>
                    </h3>
                    <span class="item-price text-primary">$2,200</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver1.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Minimalist Gold Ring (No Stone)">
                          <input type="hidden" name="price" value="900">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Minimalist Gold Ring (No Stone)</a>
                    </h3>
                    <span class="item-price text-primary">$900</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver2.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Emerald Cut Diamond Ring">
                          <input type="hidden" name="price" value="3500">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Emerald Cut Diamond Ring</a>
                    </h3>
                    <span class="item-price text-primary">$3,500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver3.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Twisted Band Diamond Ring">
                          <input type="hidden" name="price" value="2300">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Twisted Band Diamond Ring</a>
                    </h3>
                    <span class="item-price text-primary">$2,300</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
      <div class="product-prev swiper-arrow">
        <svg><use xlink:href="#chevron-left"></use></svg>
      </div>

      <div class="product-next swiper-arrow">
        <svg><use xlink:href="#chevron-right"></use></svg>
      </div>
    </section>

    <!-- =================== SILVER RINGS SECTION =================== -->
              <section id="silver-rings" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Silver Rings</h2>
            <div class="btn-right">
              <a href="#" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver5.jpg" alt="Silver engagement Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">  
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Solitaire CZ Silver Ring">
                          <input type="hidden" name="price" value="80">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Solitaire CZ Silver Ring</a>
                    </h3>
                    <span class="item-price text-primary">$80</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver6.jpg" alt="Silver engagement Rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Halo CZ Silver Ring">
                          <input type="hidden" name="price" value="120">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Halo CZ Silver Ring</a>
                    </h3>
                    <span class="item-price text-primary">$120</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver7.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Vintage Silver Engagement Ring">
                          <input type="hidden" name="price" value="100">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Vintage Silver Engagement Ring</a>
                    </h3>
                    <span class="item-price text-primary">$100</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver8.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Princess Cut Silver Ring">
                          <input type="hidden" name="price" value="110">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Princess Cut Silver Ring</a>
                    </h3>
                    <span class="item-price text-primary">$110</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/engagement-ring-silver9.jpg" alt="Silver engagement Rings in Kampala - Uganda" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Minimalist Silver Ring">
                          <input type="hidden" name="price" value="60">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Minimalist Silver Ring</a>
                    </h3>
                    <span class="item-price text-primary">$60</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
      <div class="product-prev swiper-arrow">
        <svg><use xlink:href="#chevron-left"></use></svg>
      </div>

      <div class="product-next swiper-arrow">
        <svg><use xlink:href="#chevron-right"></use></svg>
      </div>
    </section>

    <!-- =================== GOLD RINGS SECTION =================== -->
    <section id="gold-rings" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Gold Rings</h2>
            <div class="btn-right">
              <a href="#" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring9.jpg" alt="Gold wedding rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">  
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic Comfort Fit 14K Gold Band">
                          <input type="hidden" name="price" value="800">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Classic Comfort Fit 14K Gold Band</a>
                    </h3>
                    <span class="item-price text-primary">$800</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring10.jpg" alt="Gold wedding rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Polished Flat Edge 14K Wedding Band">
                          <input type="hidden" name="price" value="920">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Polished Flat Edge 14K Wedding Band</a>
                    </h3>
                    <span class="item-price text-primary">$920</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring3.jpg" alt="Gold wedding rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Brushed Matte Finish 14K Gold Ring">
                          <input type="hidden" name="price" value="950">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Brushed Matte Finish 14K Gold Ring</a>
                    </h3>
                    <span class="item-price text-primary">$950</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring4.jpg" alt="Gold wedding rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Diamond Accent 14K Gold Band">
                          <input type="hidden" name="price" value="1100">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Diamond Accent 14K Gold Band</a>
                    </h3>
                    <span class="item-price text-primary">$1,100</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/gold-wedding-ring5.jpg" alt="Gold wedding rings in Kampala" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Milgrain Edge 14K Gold Band">
                          <input type="hidden" name="price" value="1200">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Milgrain Edge 14K Gold Band</a>
                    </h3>
                    <span class="item-price text-primary">$1,200</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
      <div class="product-prev swiper-arrow">
        <svg><use xlink:href="#chevron-left"></use></svg>
      </div>

      <div class="product-next swiper-arrow">
        <svg><use xlink:href="#chevron-right"></use></svg>
      </div>
    </section>


    <!-- <section id="smart-watches" class="product-store padding-large position-relative">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Smart Watches</h2>
            <div class="btn-right">
              <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item6.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200000">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Pink watch</a>
                    </h3>
                    <span class="item-price text-primary">$870</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item7.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200000">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Heavy watch</a>
                    </h3>
                    <span class="item-price text-primary">$680</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item8.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200000">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">spotted watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item9.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200000">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">$650</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item10.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <form method="POST" action="cart.php">
                          <input type="hidden" name="name" value="Classic 18K Gold Band">
                          <input type="hidden" name="price" value="1200000">

                          <button type="submit" name="add_to_cart" class="btn btn-medium btn-black">
                              Add to Cart
                          </button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section> -->
    <!-- <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge" style="background-image: url('images/single-image1.png');background-position: right; background-repeat: no-repeat;">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium">
            <h3>10% off</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
            <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          
        </div>
      </div>
    </section> -->
    <!-- <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Latest Posts</h2>
            <div class="btn-right">
              <a href="blog.html" class="btn btn-medium btn-normal text-uppercase">Read Blog</a>
            </div>
          </div>
          <div class="post-grid d-flex flex-wrap justify-content-between">
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/post-item1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 22, 2023</span>
                  <span class="meta-category">- Gadgets</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Get some cool gadgets in 2023</a>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/post-item2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 25, 2023</span>
                  <span class="meta-category">- Technology</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Technology Hack You Won't Get</a>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/post-item3.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 22, 2023</span>
                  <span class="meta-category">- Camera</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Top 10 Small Camera In The World</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <section id="faq" class="position-relative padding-large">
      <div class="container">

        <!-- SECTION TITLE -->
        <div class="text-center pb-4">
          <h2 class="display-7 text-uppercase">Frequently Asked Questions</h2>
        </div>

        <div class="row">
          <div class="review-content position-relative">

            <!-- PREV BUTTON -->
            <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
              <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
              </svg>
            </div>

            <!-- SWIPER -->
            <div class="swiper testimonial-swiper">
              <div class="swiper-wrapper">

                <!-- FAQ 1 -->
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <h5 class="text-uppercase">Do you offer delivery?</h5>
                    <p>
                      Yes, we offer delivery services within Kampala and across Uganda at affordable rates.
                    </p>
                  </div>
                </div>

                <!-- FAQ 2 -->
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <h5 class="text-uppercase">What materials are your rings made of?</h5>
                    <p>
                      Our rings are made from high-quality materials including S925 silver, 14k and 18k gold, and tungsten.
                    </p>
                  </div>
                </div>

                <!-- FAQ 3 -->
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <h5 class="text-uppercase">How do I make payment?</h5>
                    <p>
                      Payments can be made via Mobile Money or by contacting us directly on +256 785831141.
                    </p>
                  </div>
                </div>

                <!-- FAQ 4 -->
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <h5 class="text-uppercase">Where are you located?</h5>
                    <p>
                      We are located at Pioneer Mall, Kampala, opposite Centenary Bank.
                    </p>
                  </div>
                </div>

              </div>
            </div>

            <!-- NEXT BUTTON -->
            <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
              <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
              </svg>
            </div>

          </div>
        </div>

      </div>

      <!-- PAGINATION -->
      <div class="swiper-pagination"></div>
    </section>

    <!-- =========================== CONTACT US SECTION -=============================== -->
    <section id="contact" class="padding-large">
      <div class="container">

        <!-- TITLE -->
        <div class="text-center pb-4">
          <h2 class="display-7 text-uppercase">Contact Us</h2>
          <p>We are here to help you choose the perfect ring</p>
        </div>

        <div class="row justify-content-center">

          <!-- CONTACT DETAILS -->
          <div class="col-md-5 pb-4">
            <div class="contact-info">

              <h5 class="text-uppercase pb-2">Visit Us</h5>
              <p>
                📍 Pioneer Mall, Kampala <br>
                Opposite Centenary Bank
              </p>

              <h5 class="text-uppercase pt-3 pb-2">Call / WhatsApp</h5>
              <p>
                📞 <a href="tel:+256785831141">+256 785831141</a>
              </p>

              <h5 class="text-uppercase pt-3 pb-2">Email</h5>
              <p>
                ✉️ <a href="mailto:ringeria@gmail.com">ringeria@gmail.com</a>
              </p>

            </div>
          </div>

          <!-- CONTACT FORM -->
          <div class="col-md-6">
            <form class="contact-form">

              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Your Email" required>
              </div>

              <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
              </div>

              <button type="submit" class="btn btn-black w-100">
                Send Message
              </button>

            </form>
          </div>

        </div>

      </div>
    </section>

    <!-- <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
            <div class="col-md-6 col-sm-12">
              <div class="display-header pe-3">
                <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
                <p>Get latest news, updates and deals directly mailed to your inbox.</p>
              </div>
            </div>
            <div class="col-md-5 col-sm-12">
              <form class="subscription-form validate">
                <div class="input-group flex-wrap">
                  <input class="form-control btn-rounded-none" type="email" name="EMAIL" placeholder="Your email address here" required="">
                  <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit" name="subscribe">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section id="instagram" class="padding-large overflow-hidden no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header text-uppercase text-dark text-center pb-3">
            <h2 class="display-7">Shop On Our Instagram</h2>
          </div>
          <div class="d-flex flex-wrap">
            <figure class="instagram-item pe-2">
              <a href="https://www.instagram.com/ringeria_ug/" class="image-link position-relative">
                <img src="images/silver-wedding-ring13.jpg" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://www.instagram.com/ringeria_ug/" class="image-link position-relative">
                <img src="images/silver-wedding-ring12.jpg" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://www.instagram.com/ringeria_ug/" class="image-link position-relative">
                <img src="images/tungsten-wedding-ring11.jpg" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://www.instagram.com/ringeria_ug/" class="image-link position-relative">
                <img src="images/tungsten-wedding-ring10.jpg" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://www.instagram.com/ringeria_ug/" class="image-link position-relative">
                <img src="images/tungsten-wedding-ring2.jpg" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <?php include 'includes/footer.php'; ?>