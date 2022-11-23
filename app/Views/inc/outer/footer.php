</main>
<!-- End Main -->
<!-- Footer -->
<footer class="bg-gray-100 footer border-top">
  <div class="footer-top py-6">
    <div class="container">
      <div class="border p-4 bg-white mb-6">
        <div class="row">
          <div class="col-md-6">
            <h6 class="h5">Newsletter subscription</h6>
            <p class="small m-0">Subscribe to our newsletter for exclusive discounts today.</p>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <input type="email" class="form-control bg-gray-100" placeholder="Enter your email">
              <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3 my-3">
          <div class="pb-3">
            <img src="<?= base_url('assets/img/lantema-logo.png') ?>" title="" alt="">
          </div>
          <address class="dark-link mb-4">
            <p class="mb-2">3071, Parkland Avenue, <br>Nairobi, Kenya.</p>
            <p class="mb-2"><a class="border-bottom border-secondary" href="mailto:support@lantemagroceries.com">support@lantemagroceries.com</a></p>
            <p class="mb-2"><a class="border-bottom border-secondary" href="tel:+254712345678">+254712345678</a></p>
          </address>
          <div class="nav dark-link fs-5"><a class="me-3" href="#"><i class="bi bi-facebook"></i> </a><a class="me-3" href="#"><i class="bi bi-twitter"></i> </a><a class="me-3" href="#"><i class="bi bi-instagram"></i> </a><a class="me-3" href="#"><i class="bi bi-linkedin"></i></a></div>
        </div>
        <div class="col-6 col-lg-3 my-3">
          <h6 class="text-uppercase mb-5">Support</h6>
          <ul class="list-unstyled dark-link footer-link-1 m-0">
            <li class="pb-2"><a href="#">Help</a></li>
            <li class="pb-2"><a href="#">Contact Us</a></li>
            <li class="pb-2"><a href="#">Feedback</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-3 my-3">
          <h6 class="text-uppercase mb-5">Policies</h6>
          <ul class="list-unstyled dark-link footer-link-1 m-0">
            <li class="pb-2"><a href="#">Privacy Policy</a></li>
            <li class="pb-2"><a href="#">Terms of use</a></li>
            <li class="pb-2"><a href="#">Shipping</a></li>
            <li class="pb-2"><a href="#">Return Policy</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 my-3">
          <h6 class="text-uppercase mb-5">Categories</h6>
          <ul class="list-unstyled dark-link footer-link-1 m-0">
            <li class="pb-2"><a href="#">Veggies</a></li>
            <li class="pb-2"><a href="#">Flour</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-2 border-top small">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start py-1">
          <p class="m-0">© 2022 <a href="https://kendy.itinga.co.ke/" target="_blank" class="text-reset">Doreen Kendi.</a></p>
        </div>
        <div class="col-md-6 text-center text-md-end py-1"><img src="<?= base_url('assets/img/payments.png'); ?>" title="" alt=""></div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
</div>
<!-- 
      ========================
         End Wrapper 
      ========================
      -->
<!-- script start -->
<script>
  baseUrl = "<?= base_url(); ?>";
</script>
<!-- jquery -->
<script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
<!--bootstrap-->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script><!-- slick carousel -->
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script><!-- magnific -->
<script src="<?= base_url('assets/vendor/magnific/jquery.magnific-popup.min.js'); ?>"></script><!-- isotope -->
<script src="<?= base_url('assets/vendor/isotope/isotope.pkgd.min.js'); ?>"></script><!-- count-down -->
<script src="<?= base_url('assets/vendor/count-down/jquery.countdown.min.js'); ?>"></script><!-- count-down -->
<script src="<?= base_url('assets/vendor/jarallax/jarallax-all.js'); ?>"></script><!-- Theme Js -->
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/theme.js'); ?>"></script>
<script src="<?= base_url('assets/js/cart.js'); ?>"></script>
<?php if (str_contains($_SERVER["REQUEST_URI"], "checkout")) : ?>
  <script src="<?= base_url('assets/js/checkout.js'); ?>"></script>
<?php endif; ?>
<!-- End script start -->
</body>

</html>