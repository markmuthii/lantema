<?php

$title = "Checkout";

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

<!-- Table -->
<div class="py-6">
  <div class="container">
    <div class="row flex-row-reverse">
      <!-- sidebar -->
      <div class="col-lg-5 ps-lg-5">
        <div class="card">
          <div class="card-body">
            <ul id="checkoutItems" class="list-unstyled m-0 p-0">

            </ul>
            <ul class="list-unstyled m-0">
              <li class="d-flex justify-content-between align-items-center border-top border-bottom py-3 mt-3">
                <h6 class="me-2">Grand Total</h6>
                <span class="text-end text-dark">KSH <span id="checkoutTotal"></span></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card">
          <div class="card-body">
            <h5 class="border-bottom mb-4 pb-3">Shipping address</h5>
            <p>
              30178, Starehe,<br>
              00100 - Nairobi,<br>
              Kenya.
            </p>
          </div>
        </div>
        <div class="accordion accordion-alt pt-4" id="payment-methods">
          <div class="card shadow-none border">
            <div class="card-header p-0 position-relative bg-transparent">
              <div class="form-check m-3 collapsed" data-bs-toggle="collapse" data-bs-target="#cashOnDeliveryCol">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" checked>
                <label class="form-check-label h6 m-0 stretched-link" for="cashOnDelivery">Cash on Delivery</label>
              </div>
            </div>
            <div class="collapse" id="cashOnDeliveryCol" data-bs-parent="#payment-methods">
              <div class="card-body p-3">
                <p class="mb-0">Pay cash upon delivery of your order.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-4">
          <button id="placeOrder" type="submit" class="btn btn-primary w-100">Place Order</button>
          <p class="m-0 pt-3">By placing your order you agree to our <a href="#">Terms & Conditions</a>, <a href="#">privacy and returns</a> policies. You also consent to some of your data being stored by Lantema Groceries, which may be used to make future shopping experiences better for you.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Table -->


<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>