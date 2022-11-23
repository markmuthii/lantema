<?php

$title = "Order Items";
$has_data_table = true;

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
  </div>

  <div class="card mb-5">
    <div class="card-body table-responsive">
      <table id="items" class="table datatable table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($items as $item) : ?>
            <tr>
              <td><?= $item->id; ?></td>
              <td><img src="<?= $item->image_url; ?>" alt=""></td>
              <td><?= $item->name; ?></td>
              <td><?= $item->price; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>



<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>