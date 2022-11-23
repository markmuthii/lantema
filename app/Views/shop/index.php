<?php

$title = "Shop";

require APPROOT . '/Views/inc/outer/header.php';

?>

<!-- Breadcrumb -->
<div class="py-3 bg-gray-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 my-2">
        <h1 class="m-0 h4 text-center text-lg-start"><?= $title; ?></h1>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->
<!-- Shop -->
<section class="py-6">
  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-4 col-xl-3 pe-xl-5 offcanvas-lg offcanvas-start px-0 px-lg-3" tabindex="-1" id="shop_filter" aria-labelledby="shop_filterLabel">
        <div class="offcanvas-body flex-column">
          <!-- Categories -->
          <div class="shop-sidebar-block">
            <div class="shop-sidebar-title">
              <a class="h5" data-bs-toggle="collapse" href="#shop_categories" role="button" aria-expanded="true" aria-controls="shop_categories">Categories <i class="bi bi-chevron-up"></i></a>
            </div>
            <div class="shop-category-list collapse show" id="shop_categories">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link active">All Products</a>
                </li>
                <?php foreach ($categories as $cat) : ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('category') . "/" . $cat["slug"] ?>"><?= $cat["name"]; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- End Categories -->
        </div>
      </div>
      <!-- End Sidebar -->
      <!-- Product Box -->
      <div class="col-lg-8 col-xl-9">
        <div class="row g-3">
          <?php foreach ($products as $product) : ?>
            <!-- Product Box -->
            <div class="col-sm-6 col-lg-4">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="product-media">
                    <a href="#">
                      <img class="img-fluid" src="<?= $product['image_url']; ?>" title="" alt="">
                    </a>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta">
                    <!-- Category -->
                    <a href="#"><?= $product['category']; ?></a>
                  </div>
                  <h4 class="product-title">
                    <!-- Product name -->
                    <a href="#"><?= $product['name']; ?></a>
                  </h4>
                  <div class="product-price">
                    <!-- Product price -->
                    <span class="text-primary">KSH <?= $product['price']; ?></span>
                  </div>
                  <div class="nav-thumbs">
                    <button class="addToCart btn btn-primary btn-block w-100 btn-sm" data-id="<?= $product['id']; ?>" data-name="<?= $product['name']; ?>" data-price="<?= $product['price']; ?>" data-image="<?= $product['image_url']; ?>"><i class="fi-shopping-cart"></i> &nbsp;Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Product Box -->
          <?php endforeach; ?>
        </div>
        <div class="shop-bottom-bar d-flex align-items-center mt-3">
          <?= $pager->links(); ?>
        </div>
      </div>
      <!-- End Product Box -->
    </div>
  </div>
</section>
<!-- End Shop -->

<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>