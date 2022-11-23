<?php

$title = "Admin Dashboard";

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h3>Customers</h3>
          <h5><?= $customers ?></h5>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h3>Products</h3>
          <h5><?= $products; ?></h5>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h3>Pending Orders</h3>
          <h5><?= $orders; ?></h5>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>