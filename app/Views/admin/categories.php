<?php

$title = "Categories";
$has_data_table = true;

require APPROOT . '/Views/inc/inner/header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</button>
      </div>
    </div>
  </div>

  <?php if (!empty(session()->getFlashdata("category_error"))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata("category_error"); ?></div>
  <?php elseif (!empty(session()->getFlashdata("category_success"))) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata("category_success"); ?></div>
  <?php endif; ?>

  <div class="card mb-5">
    <div class="card-body table-responsive">
      <table id="products" class="table datatable table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($categories as $category) : ?>
            <tr>
              <td><?= $category["id"]; ?></td>
              <td><?= $category["name"]; ?></td>
              <td><?= $category["description"]; ?></td>
              <td><?= $category["slug"]; ?></td>
              <td>
                <?php if ($category["status"] == 1) : ?>
                  <span class="badge rounded-pill bg-success">Active</span>
                <?php elseif ($category["status"] == 2) : ?>
                  <span class="badge rounded-pill bg-warning">Inactive</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if ($category["status"] == 1) : ?>
                  <a href="#" class="btn btn-danger btn-sm text-nowrap">Suspend</a>
                <?php elseif ($category["status"] == 2) : ?>
                  <a href="#" class="btn btn-success btn-sm text-nowrap">Activate</a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-lg" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5">
          <!-- Form -->
          <form action="<?= base_url('admin/categories'); ?>" method="post">
            <?= csrf_field(); ?>

            <!-- Name -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <input type="text" name="name" class="form-control <?= isset($validation) && isset($validation->getErrors()['name']) ? 'is-invalid' : ''; ?>" placeholder="Enter category name..." value="<?= set_value('name'); ?>">
              <!-- Label -->
              <label for="name">Category Name <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'name') : ''; ?></span>
            </div>

            <!-- Description -->
            <div class="form-floating mb-3">
              <!-- Input -->
              <textarea cols="60" rows="30" style="height: 100px;" name="description" class="form-control <?= isset($validation) && isset($validation->getErrors()['description']) ? 'is-invalid' : ''; ?>" placeholder="Enter description..." value="<?= set_value('description'); ?>"></textarea>
              <!-- Label -->
              <label for="description">Description <sup>*</sup></label>
              <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'description') : ''; ?></span>
            </div>

            <!-- Submit -->
            <input type="submit" class="btn btn-lg w-100 btn-primary mt-3" value="Add Category">

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