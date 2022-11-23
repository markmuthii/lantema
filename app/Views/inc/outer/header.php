<?php
$categories = get_product_categories();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- metas -->
  <meta charset="utf-8">
  <meta name="author" content="pxdraft">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="keywords" content="ShopApp - eCommerce Bootstrap 5 Template">
  <meta name="description" content="ShopApp - eCommerce Bootstrap 5 Template">
  <!-- title -->
  <title>Lantema Grocery Store</title>
  <!-- Favicon -->
  <!-- <link rel="shortcut icon" href="https://www.pxdraft.com/wrap/shopapp/assets/img/favicon.ico"> -->
  <!-- CSS Template -->
  <link href="<?= base_url('assets/css/theme.css'); ?>" rel="stylesheet">
</head>

<body>
  <!-- Mini Cart  -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="modalMiniCart" aria-labelledby="modalMiniCartLabel">
    <div class="offcanvas-header border-bottom">
      <h6 class="offcanvas-title" id="modalMiniCartLabel">Your Cart (<span id="cartItemCount">0</span>)</h6>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul id="miniCartItems" class="list-unstyled m-0 p-0">
        <h6>Your cart is empty.</h6>
      </ul>
    </div>
    <div class="offcanvas-footer border-top p-3">
      <div class="row g-0 pt-2 mt-2 border-top fw-bold text-dark">
        <div class="col-8"><span class="text-dark">Subtotal</span></div>
        <div class="col-4 text-end"><span class="ml-auto">KSH <span id="miniCartTotal"></span></span></div>
      </div>
      <div class="pt-4">
        <a id="checkoutButton" class="btn btn-block btn-dark w-100 mb-3" href="<?= base_url("checkout"); ?>">Continue to Checkout</a>
      </div>
    </div>
  </div>
  <!-- End Mini Cart  -->
  <!-- Skippy & Prload -->
  <!-- skippy -->
  <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content">
    <div class="container"><span class="u-skiplink-text">Skip to main content</span></div>
  </a>
  <!-- End skippy -->
  <!-- Preload -->
  <div id="loading" class="loading-preloader">
    <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
  </div>
  <!-- 
  ========================
  Wrapper
  ========================
  -->
  <div class="wrapper">
    <!-- heder height -->
    <div class="header-height-bar"></div>
    <!-- Header -->
    <header class="header-main header-light header-fluid bg-white header-option-5">
      <!-- Top Header -->
      <div class="header-middle">
        <div class="container">
          <div class="row justify-content-around align-items-center">
            <div class="col-md-4 text-center order-md-1">
              <!-- Logo -->
              <a class="navbar-brand" href="https://www.pxdraft.com/wrap/shopapp/index.html"><img src="<?= base_url('assets/img/lantema-logo.png') ?>" title="" alt=""> </a><!-- Logo -->
            </div>
            <div class="col-md-4">
              <form>
                <div class="h-search">
                  <!-- Search input -->
                  <input class="form-control" type="text" name="search" placeholder="What are you looking for?">
                  <!-- Search button -->
                  <button type="button" class="btn shadow-none"><i class="fi-search"></i></button>
                </div>
              </form>
            </div>
            <div class="col-md-4 order-md-1">
              <div class="nav flex-nowrap align-items-center justify-content-md-end header-right">
                <!-- Nav User-->
                <div class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" id="dropdown_myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fi-user"></i></a>
                  <div class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="dropdown_myaccount">
                    <a class="dropdown-item" href="https://www.pxdraft.com/wrap/shopapp/html/account-01/login.html">Login</a>
                    <a class="dropdown-item" href="https://www.pxdraft.com/wrap/shopapp/html/account-01/sign-up.html">Register</a>
                    <a class="dropdown-item" href="https://www.pxdraft.com/wrap/shopapp/html/account-01/wishlist.html">Wishlist</a>
                    <a class="dropdown-item" href="https://www.pxdraft.com/wrap/shopapp/html/account-01/my-account.html">My account</a>
                  </div>
                </div>
                <!-- Cart -->
                <div class="nav-item">
                  <a class="nav-link" data-bs-toggle="offcanvas" href="#modalMiniCart" role="button" aria-controls="modalMiniCart">
                    <span id="cartItemCountBadge" class="" data-cart-items="0"><i class="fi-shopping-cart"></i></span>
                  </a>
                </div>
                <!-- Mobile Toggle -->
                <button class="navbar-toggler navbar-toggler-px-light ms-auto ms-md-2 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End Mobile Toggle -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Header -->
      <?php require APPROOT . "/Views/inc/outer/nav.php"; ?>
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main>