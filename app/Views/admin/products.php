<?php

$title = "Products";
$has_data_table = true;

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-primary">Add Product</button>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table id="products" class="table datatable table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>In Stock</th>
            <!-- <th>Category</th> -->
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
            <tr>
              <td><?= $product->id; ?></td>
              <td><img src="<?= $product->image_url; ?>" alt=""></td>
              <td><?= $product->name; ?></td>
              <td><?= $product->description; ?></td>
              <td><?= $product->price; ?></td>
              <td><?= $product->quantity; ?></td>
              <td><a href="#" class="btn btn-success btn-sm text-nowrap">Update Stock</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>