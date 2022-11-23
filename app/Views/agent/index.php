<?php

$title = "Orders";
$has_data_table = true;

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
  </div>

  <?php if (!empty(session()->getFlashdata("order_error"))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata("order_error"); ?></div>
  <?php elseif (!empty(session()->getFlashdata("order_success"))) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata("order_success"); ?></div>
  <?php endif; ?>

  <div class="card mb-5">
    <div class="card-body table-responsive">
      <table id="items" class="table datatable table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th class="fw-600">Order #</th>
            <th class="fw-600">Date Purchased</th>
            <th class="fw-600">Status</th>
            <th class="fw-600 text-end">Total</th>
            <th class="fw-600 text-end">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orders as $order) : ?>
            <tr>
              <td class="p-3">
                <a class="link-dark" href="<?= base_url("order/" . $order["id"]); ?>"># <?= $order["id"] ?></a>
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
              <td class="p-3">
                <?php if ($order["status"] == 0) : ?>
                  <a href="<?= base_url("order/disburse/" . $order["id"]) ?>" class="btn btn-sm btn-block btn-primary">Mark Disbursed</a>
                <?php elseif ($order["status"] == 1) : ?>
                  <a href="<?= base_url("order/deliver/" . $order["id"]) ?>" class="btn btn-sm btn-block btn-warning">Mark Delivered</a>
                <?php elseif ($order["status"] == 2) : ?>
                  <span class="badge bg-success">Complete</span>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="float-right">
        <?= $pager->links(); ?>
      </div>
    </div>
  </div>
</main>



<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>