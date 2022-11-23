<?php

$title = "Orders";

require APPROOT . '/Views/inc/outer/header.php';

?>
<!-- Breadcrumb -->
<div class="py-3 bg-gray-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 my-2">
        <h1 class="m-0 h4 text-center text-lg-start"><?= $title ?></h1>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Table -->
<div class="py-6">
  <div class="container">
    <div class="row">
      <?php require APPROOT . '/Views/inc/outer/profile-menu.php'; ?>

      <!-- Content -->
      <div class="col-lg-8 col-xxl-9">
        <div class="table-responsive fs-md mb-4">
          <table class="table table-bordered table-hover mb-0">
            <thead class="text-700 bg-gray-200">
              <tr>
                <th class="fw-600">Order #</th>
                <th class="fw-600">Date Purchased</th>
                <th class="fw-600">Status</th>
                <th class="fw-600 text-end">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($orders as $order) : ?>
                <tr>
                  <td class="p-3">
                    <a class="link-dark" href="#order-details" data-bs-toggle="modal"># <?= $order["id"] ?></a>
                  </td>
                  <td class="p-3"><?= $order["created_at"]; ?></td>
                  <td class="p-3">
                    <?php if ($order["status"] == 0) : ?>
                      <span class="badge bg-info m-0">Pending</span>
                    <?php elseif ($order["status"] == 1) : ?>
                      <span class="badge bg-warning m-0">Disbursed</span>
                    <?php elseif ($order["status"] == 2) : ?>
                      <span class="badge bg-success m-0">Delivered</span>
                    <?php elseif ($order["status"] == 3) : ?>
                      <span class="badge bg-danger m-0">Cancelled</span>
                    <?php endif; ?>
                  </td>
                  <td class="p-3 text-end">KSH <?= $order["total"]; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="d-flex align-items-center mt-3">
          <div class="ms-lg-auto">
            <?= $pager->links(); ?>
          </div>
        </div>
      </div>
      <!-- End Content -->
    </div>
  </div>
</div>
<!--Table -->


<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>