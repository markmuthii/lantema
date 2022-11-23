<?php

$title = "Home";

require APPROOT . '/Views/inc/outer/header.php';

?>

<!-- Home Slider -->
<div class="swiper swiper-container" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 0,
          "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
          },
          "navigation": {
          "nextEl": ".swiper-next-01",
          "prevEl": ".swiper-prev-01"
          },
          "autoplay": {
          "delay": 5000,
          "disableOnInteraction": false
          }
          }'>
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="bg-no-repeat bg-cover bg-50 px-8" style="background-image: url(<?= base_url('assets/img/grocery/food-home-banner-1.jpg') ?>);">
        <div class="container">
          <div class="row min-vh-65 align-items-center py-6">
            <div class="col-lg-6 pe-xl-12">
              <!-- <h6 class="fw-500 mb-3 letter-spacing-2">TRENDING NOW</h6> -->
              <h1 class="display-4 fw-600">Eat clean & green.<br>Eat Organic.</h1>
              <p class="lead">Quality produce from local farmers, guaranteed.</p>
              <div class="pt-3"><a class="btn btn-primary" href="#start">Discover More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="bg-no-repeat bg-cover bg-50 px-8" style="background-image: url(<?= base_url('assets/img/grocery/food-home-banner-2.jpg') ?>);">
        <div class="container">
          <div class="row min-vh-65 align-items-center py-6">
            <div class="col-lg-6 pe-xl-12">
              <h1 class="display-4 fw-600">Eat clean & green.<br>Eat Organic.</h1>
              <p class="lead">Fast and safe dwelivery ensures we do not compromise on the Quality of the groceries you get.</p>
              <div class="pt-3"><a class="btn btn-primary" href="#start">Discover More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-arrow-style-01 swiper-next swiper-next-01"><i class="bi bi-chevron-right"></i></div>
  <div class="swiper-arrow-style-01 swiper-prev swiper-prev-01"><i class="bi bi-chevron-left"></i></div>
  <div class="swiper-pagination swiper-pagination-white"></div>
</div>
<!-- End Home Slider -->
<!-- Section -->
<section id="start" class="section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="px-4 position-relative pt-5 text-center rounded" style="background-color: #ffe1db;">
          <div class="pb-1">
            <h6 style="color: #f62b22;">FRESH FOOD</h6>
            <h3 class="m-0">Organic and fresh<br>30% off</h3>
          </div>
          <a href="#" class="stretched-link"><img src="<?= base_url('assets/img/grocery/food-banner-2.png') ?>" title="" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="px-4 position-relative pt-5 text-center rounded" style="background-color: #e6ffd6;">
          <div class="pb-1">
            <h6 style="color: #2e6b1c;">FRESH FOOD</h6>
            <h3 class="m-0">Organic and fresh<br>30% off</h3>
          </div>
          <a href="#" class="stretched-link"><img src="<?= base_url('assets/img/grocery/food-banner-1.png') ?>" title="" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="px-4 position-relative pt-5 text-center rounded" style="background-color: #ffdee1;">
          <div class="pb-1">
            <h6 style="color: #fe0d25;">FRESH FOOD</h6>
            <h3 class="m-0">Organic and fresh<br>30% off</h3>
          </div>
          <a href="#" class="stretched-link"><img src="<?= base_url('assets/img/grocery/food-banner-3.png') ?>" title="" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->
<!-- Product section -->
<section class="section pt-0">
  <div class="container">
    <div class="row justify-content-center section-heading">
      <div class="col-lg-6 text-center">
        <p class="fs-6 m-0">Read Today’s News.</p>
        <h3 class="h2 mt-2 mb-0">Healthy vegetables</h3>
      </div>
    </div>
    <!-- Tabs Nav -->
    <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="home-6_tabs" role="tablist">
      <li class="nav-item" role="presentation"><button class="nav-link active" id="h3_tabnav_1" data-bs-toggle="tab" data-bs-target="#h6_tab_1" type="button" role="tab" aria-controls="h6_tab_1" aria-selected="true">Organic dryfruit</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="h3_tabnav_2" data-bs-toggle="tab" data-bs-target="#h6_tab_2" type="button" role="tab" aria-controls="h6_tab_2" aria-selected="false">Organic juice</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="h3_tabnav_3" data-bs-toggle="tab" data-bs-target="#h6_tab_3" type="button" role="tab" aria-controls="h6_tab_3" aria-selected="false">Sea & Fish</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="h3_tabnav_4" data-bs-toggle="tab" data-bs-target="#h6_tab_4" type="button" role="tab" aria-controls="h6_tab_4" aria-selected="false">Pistachios</button></li>
    </ul>
    <!-- End Tabs Nav -->
    <!-- Tab Content -->
    <div class="tab-content" id="home-6_tabsContent">
      <!-- Tab pane -->
      <div class="tab-pane fade show active" id="h6_tab_1" role="tabpanel" aria-labelledby="h3_tabnav_1">
        <div class="row g-3 g-lg-4">
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/apple.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/banana.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/brinjel.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/brocoli.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
        </div>
      </div>
      <!-- Tab Pane -->
      <div class="tab-pane fade" id="h6_tab_2" role="tabpanel" aria-labelledby="h3_tabnav_2">
        <div class="row g-3 g-lg-4">
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/cabbege.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/carrots.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/corn.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/cucumber.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
        </div>
      </div>
      <!-- Tab Pane -->
      <div class="tab-pane fade" id="h6_tab_3" role="tabpanel" aria-labelledby="h3_tabnav_3">
        <div class="row g-3 g-lg-4">
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/ginger.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/gragon-fruit.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/guava.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/kiwi.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
        </div>
      </div>
      <!-- Tab Pane -->
      <div class="tab-pane fade" id="h6_tab_4" role="tabpanel" aria-labelledby="h3_tabnav_4">
        <div class="row g-3 g-lg-4">
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/lemon-1.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/mango.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/melon.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
          <!-- Product Box -->
          <div class="col-6 col-lg-3">
            <div class="product-card-7">
              <div class="product-card-image">
                <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                <div class="product-action"><a href="#" class="btn btn-dark"><i class="fi-heart"></i> </a><a href="#" class="btn btn-dark"><i class="fi-repeat"></i> </a><a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-dark"><i class="fi-eye"></i></a></div>
                <div class="product-media"><a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/muberry.jpg') ?>" title="" alt=""></a></div>
                <div class="product-cart-btn"><a class="btn btn-primary"><i class="fi-shopping-cart"></i> Add to Cart</a></div>
              </div>
              <div class="product-card-info">
                <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
              </div>
            </div>
          </div>
          <!-- End Product Box -->
        </div>
      </div>
    </div>
    <!-- End Tab Content -->
  </div>
</section>
<!-- End Product section -->
<!-- Category section -->
<section class="section pt-0">
  <div class="container">
    <div class="row justify-content-center section-heading">
      <div class="col-lg-6 text-center">
        <p class="fs-6 m-0">Read Today’s News.</p>
        <h3 class="h2 mt-2 mb-0">Season Collection</h3>
      </div>
    </div>
    <div class="row gy-4">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #fff3ea;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-beans.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #ffefbd;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-cheese.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #ffefe6;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-egg-meat.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #ffe5e6;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-fruits.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #fff6dc;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-honey.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #d7f2ff;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-milk.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #ffefbd;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-organic-drink.png') ?>" title="" alt=""></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="p-2 rounded d-flex align-items-center position-relative hover-scale" style="background-color: #ffefe6;">
          <div class="col px-4">
            <h5 class="mb-0"><a href="#" class="stretched-link text-reset">Fresh Fruits</a></h5>
            <span>2 items</span>
          </div>
          <div class="avatar avatar-xl hover-scale-in"><img src="<?= base_url('assets/img/grocery/cat-vegetable.png') ?>" title="" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Category section -->
<!-- CTA -->
<section>
  <div class="container">
    <div class="row g-0 px-4 px-lg-5 py-5 rounded bg-cover bg-fiex bg-center border" style="background-image: url(<?= base_url('assets/img/grocery/food-home-banner-3.jpg') ?>);">
      <div class="col-md-8 my-3 text-center text-md-start">
        <h3 class="h2 m-0">Eat clean &amp; green. Eat Organic.</h3>
      </div>
      <div class="col-md-4 my-3 text-center text-md-end"><a class="btn btn-primary" href="#" tabindex="0">Discover More</a></div>
    </div>
  </div>
</section>
<!-- End CTA -->
<!-- Deal section -->
<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <h5 class="mb-4">New Arrivals</h5>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/muberry.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/onion.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/orange.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h5 class="mb-4">Upcoming</h5>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/pineapple.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/potato.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/strawberry.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h5 class="mb-4">New Arrivals</h5>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/muberry.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/onion.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
        <div class="product-card-4">
          <div class="product-card-image"><a href="#"><img src="<?= base_url('assets/img/grocery/orange.jpg') ?>" title="" alt=""></a></div>
          <div class="product-card-info">
            <h6 class="product-title"><a href="#" tabindex="0">Fine-knit sweater</a></h6>
            <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del class="fs-sm text-muted">$38.<small>50</small></del></div>
            <div class="produc-card-cart"><a class="link-effect" href="#">Buy Now</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Deal section -->
<!-- Section -->
<section class="section pt-0">
  <div class="container">
    <div class="row justify-content-center section-heading">
      <div class="col-lg-6 text-center">
        <p class="fs-6 m-0">Read Today’s News.</p>
        <h3 class="h2 mt-2 mb-0">New Blog Posts</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 my-3">
        <div class="hover-scale text-center">
          <div class="hover-scale-in position-relative">
            <a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/food-blog-2.jpg') ?>" title="" alt=""></a>
            <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2"><span class="h4 m-0">25</span> <small>MAR</small></div>
          </div>
          <div class="px-3 py-4 mx-3 mx-lg-5 bg-white mt-n6 position-relative">
            <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 my-3">
        <div class="hover-scale text-center">
          <div class="hover-scale-in position-relative">
            <a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/food-blog-1.jpg') ?>" title="" alt=""></a>
            <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2"><span class="h4 m-0">25</span> <small>MAR</small></div>
          </div>
          <div class="px-3 py-4 mx-3 mx-lg-5 bg-white mt-n6 position-relative">
            <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 my-3">
        <div class="hover-scale text-center">
          <div class="hover-scale-in position-relative">
            <a href="#"><img class="img-fluid" src="<?= base_url('assets/img/grocery/food-blog-3.jpg') ?>" title="" alt=""></a>
            <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2"><span class="h4 m-0">25</span> <small>MAR</small></div>
          </div>
          <div class="px-3 py-4 mx-3 mx-lg-5 bg-white mt-n6 position-relative">
            <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->

<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>