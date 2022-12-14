<?php

$title = "Orders";
$has_data_table = true;

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
  </div>

  <div class="card">
    <div class="card-body">
      <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>Product</th>
            <th>Customer</th>
            <th>Address</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orders as $order) : ?>
            <tr>
              <td><?= $order->id; ?></td>
              <td><?= $order->created_at; ?></td>
              <td><?= $order->product; ?></td>
              <td><?= $order->first_name . " " . $order->last_name; ?></td>
              <td><?= $order->address; ?></td>
              <td><?= $order->status; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>