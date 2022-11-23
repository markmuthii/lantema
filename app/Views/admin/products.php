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
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</button>
      </div>
    </div>
  </div>

  <?php if (!empty(session()->getFlashdata("product_error"))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata("product_error"); ?></div>
  <?php elseif (!empty(session()->getFlashdata("product_success"))) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata("product_success"); ?></div>
  <?php endif; ?>

  <div class="card mb-5">
    <div class="card-body table-responsive">
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
              <td><?= $product["id"]; ?></td>
              <td><img src="<?= $product["image_url"]; ?>" alt=""></td>
              <td><?= $product["name"]; ?></td>
              <td><?= strlen($product["description"]) > 250 ? substr($product["description"], 0, 250) . '...' : $product["description"]; ?></td>
              <td><?= $product["price"]; ?></td>
              <td><?= $product["quantity"]; ?></td>
              <td><a href="#" class="btn btn-success btn-sm text-nowrap">Update</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="float-right">
        <?= $pager->links(); ?>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-lg" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5">
          <!-- Form -->
          <form action="<?= base_url('admin/products'); ?>" method="post">
            <?= csrf_field(); ?>

            <!-- Name -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <input type="text" name="name" class="form-control <?= isset($validation) && isset($validation->getErrors()['name']) ? 'is-invalid' : ''; ?>" placeholder="Enter product name..." value="<?= set_value('name'); ?>">
              <!-- Label -->
              <label for="name">Name <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'name') : ''; ?></span>
            </div>

            <!-- Price -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <input type="number" name="price" class="form-control <?= isset($validation) && isset($validation->getErrors()['price']) ? 'is-invalid' : ''; ?>" placeholder="Enter product price..." value="<?= set_value('price'); ?>">
              <!-- Label -->
              <label for="price">Price <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'price') : ''; ?></span>
            </div>

            <!-- Quantity -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <input type="number" name="quantity" class="form-control <?= isset($validation) && isset($validation->getErrors()['quantity']) ? 'is-invalid' : ''; ?>" placeholder="Enter product price..." value="<?= set_value('quantity'); ?>">
              <!-- Label -->
              <label for="quantity">Quantity <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'quantity') : ''; ?></span>
            </div>

            <!-- Image URL -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <input type="text" name="image_url" class="form-control <?= isset($validation) && isset($validation->getErrors()['image_url']) ? 'is-invalid' : ''; ?>" placeholder="Enter product price..." value="<?= set_value('image_url'); ?>">
              <!-- Label -->
              <label for="image_url">Image URL <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'image_url') : ''; ?></span>
            </div>

            <!-- Description -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <textarea cols="60" rows="30" style="height: 100px;" name="description" class="form-control <?= isset($validation) && isset($validation->getErrors()['description']) ? 'is-invalid' : ''; ?>" placeholder="Enter description..." value="<?= set_value('description'); ?>"></textarea>
              <!-- Label -->
              <label for="description">Description <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'description') : ''; ?></span>
            </div>

            <!-- Category -->
            <div class="form-floating mb-3">
              <select name="category_id" id="category_id" class="form-control">
                <option value="0">Select Category</option>
                <?php foreach ($categories as $cat) : ?>
                  <option value="<?= $cat["id"]; ?>"><?= $cat["name"]; ?></option>
                <?php endforeach; ?>
              </select>
              <!-- Label -->
              <label for="description">Category <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'category_id') : ''; ?></span>
            </div>

            <!-- Submit -->
            <input type="submit" class="btn btn-lg w-100 btn-primary mt-3" value="Add Product">

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</main>



<?php require APPROOT . '/Views/inc/inner/footer.php'; ?>