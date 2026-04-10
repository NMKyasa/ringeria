 <footer id="footer" class="overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <img src="images/ringeria-logo.jpg" alt="Ringeria logo" style="height:50px;">
                  <p>Ringeria offers premium wedding and engagement rings in gold, silver, and tungsten. 
                        Visit us at Pioneer Mall, Kampala.
                   </p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <!-- <a href="#">
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </a> -->
                      </li>
                      <li>
                        <a href="https://www.instagram.com/ringeria_ug/">
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <!-- <a href="#">
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </a> -->
                      </li>
                      <li>
                        <!-- <a href="#">
                          <svg class="linkedin">
                            <use xlink:href="#linkedin" />
                          </svg>
                        </a> -->
                      </li>
                      <li>
                        <!-- <a href="#">
                          <svg class="youtube">
                            <use xlink:href="#youtube" />
                          </svg>
                        </a> -->
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">Quick Links</h5>
                  <ul class="menu-list list-unstyled text-uppercase">
                    <li class="menu-item pb-2">
                      <a href="index.php#billboard">Home</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#wedding-rings">Wedding Rings</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#engagement-rings">Engagement Rings</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#silver-rings">Silver Rings</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#gold-rings">Gold Rings</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">Help</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item pb-2">
                      <a href="cart.php">Your Cart</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#faq">FAQs</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="checkout.php">Check Out</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="index.php#contact">Contact Us</a>
                    </li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                    <!-- <li class="menu-item pb-2">
                      <a href="#">Faqs</a>
                    </li> -->
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-uppercase pb-2">Contact Us</h5>
                  <p>📍 Pioneer Mall, Kampala <br>
                Opposite Centenary Bank Mapeera Branch (main branch)
                  </p>
                  <p> 📞 <a href="tel:+256785831141">+256 785831141</a>
                  </p>
                   <p>
                        ✉️ <a href="mailto:ringeria@gmail.com">ringeria@gmail.com</a>
                   </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>
    <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <!-- <div class="col-md-4 col-sm-6">
            <div class="Shipping d-flex">
              <p>We ship with:</p> Bruce Co. Jewellers
              <div class="card-wrap ps-2">
                <img src="images/dhl.png" alt="visa">
                <img src="images/shippingcard.png" alt="mastercard">
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-4 col-sm-6">
            <div class="payment-method d-flex">
              <p>Payment options:</p>
              <div class="card-wrap ps-2">
                <img src="images/visa.jpg" alt="visa">
                <img src="images/mastercard.jpg" alt="mastercard">
                <img src="images/paypal.jpg" alt="paypal">
              </div>
            </div>
          </div> -->
          <div class="col-md-4 col-sm-6">
            <div class="copyright">
               <p>© <?php echo date("Y"); ?> Ringeria. All rights reserved.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 text-end">
                <p>Premium Rings | Kampala, Uganda</p>
            </div>
        </div>
      </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            if (pageYOffset >= sectionTop) {
                current = section.getAttribute("id");
            }
            });

            navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(current)) {
                link.classList.add("active");
            }
            });
        });
        });
    </script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>