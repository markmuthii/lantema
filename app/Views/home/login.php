<?php

$title = "Login";

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
<!-- login page -->
<div class="section">
  <div class="container">
    <div class="justify-content-center row">
      <div class="col-lg-5 col-xxl-4">
        <div class="card">
          <div class="card-body">
            <?php if (!empty(session()->getFlashdata("login_error"))) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata("login_error"); ?></div>
            <?php elseif (!empty(session()->getFlashdata("login_success"))) : ?>
              <div class="alert alert-success"><?= session()->getFlashdata("login_success"); ?></div>
            <?php endif; ?>

            <!-- Form -->
            <form action="<?= base_url('login'); ?>" method="post">
              <?= csrf_field(); ?>

              <!-- Email address -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="email" name="email" class="form-control <?= isset($validation) && isset($validation->getErrors()['email']) ? 'is-invalid' : ''; ?>" placeholder="Enter email..." value="<?= set_value('email'); ?>">
                <label for="email">Email <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'email') : ''; ?></span>
              </div>

              <!-- Password -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input id="password" name="password" class="form-control <?= isset($validation) && isset($validation->getErrors()['password']) ? 'is-invalid' : ''; ?>" type="password" placeholder="Enter your password" value="<?= set_value('password'); ?>">
                <label for="password">Password <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'password') : ''; ?></span>
              </div>

              <!-- Submit -->
              <input type="submit" class="btn btn-lg w-100 btn-primary mb-3" value="Login">

            </form>
            <div class="pt-4 text-center"><span class="text-muted">Don't have an account? <a href="<?= base_url('register') ?>">Signup here</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end login -->

<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>