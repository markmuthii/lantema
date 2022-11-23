<?php

$title = "Register";

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
      <div class="col-lg-10 col-xxl-6">
        <div class="card">
          <div class="card-body">
            <?php if (!empty(session()->getFlashdata("register_error"))) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata("register_error"); ?></div>
            <?php elseif (!empty(session()->getFlashdata("register_success"))) : ?>
              <div class="alert alert-success"><?= session()->getFlashdata("register_success"); ?></div>
            <?php endif; ?>

            <!-- Form -->
            <form action="<?= base_url('register'); ?>" method="post">
              <?= csrf_field(); ?>

              <!-- First Name -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="text" name="first_name" class="form-control <?= isset($validation) && isset($validation->getErrors()['first_name']) ? 'is-invalid' : ''; ?>" placeholder="Enter first_name..." value="<?= set_value('first_name'); ?>">
                <label for="first_name">First Name <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'first_name') : ''; ?></span>
              </div>

              <!-- Last Name -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="text" name="last_name" class="form-control <?= isset($validation) && isset($validation->getErrors()['last_name']) ? 'is-invalid' : ''; ?>" placeholder="Enter last_name..." value="<?= set_value('last_name'); ?>">
                <label for="last_name">Last Name <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'last_name') : ''; ?></span>
              </div>

              <!-- Username -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="text" name="username" class="form-control <?= isset($validation) && isset($validation->getErrors()['username']) ? 'is-invalid' : ''; ?>" placeholder="Enter username..." value="<?= set_value('username'); ?>">
                <label for="username">Username <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'username') : ''; ?></span>
              </div>

              <!-- Email address -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="email" name="email" class="form-control <?= isset($validation) && isset($validation->getErrors()['email']) ? 'is-invalid' : ''; ?>" placeholder="Enter email..." value="<?= set_value('email'); ?>">
                <label for="email">Email <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'email') : ''; ?></span>
              </div>

              <!-- Phone -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input type="text" name="telephone" class="form-control <?= isset($validation) && isset($validation->getErrors()['telephone']) ? 'is-invalid' : ''; ?>" placeholder="Enter telephone..." value="<?= set_value('telephone'); ?>">
                <label for="telephone">Phone <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'telephone') : ''; ?></span>
              </div>

              <!-- Password -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input id="password" name="password" class="form-control <?= isset($validation) && isset($validation->getErrors()['password']) ? 'is-invalid' : ''; ?>" type="password" placeholder="Password..." value="<?= set_value('password'); ?>">
                <label for="password">Password <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'password') : ''; ?></span>
              </div>

              <!-- Confirm Password -->
              <div class="form-floating mb-3">
                <!-- Label -->
                <!-- Input -->
                <input id="confirm_password" name="confirm_password" class="form-control <?= isset($validation) && isset($validation->getErrors()['confirm_password']) ? 'is-invalid' : ''; ?>" type="password" placeholder="Confirm password..." value="<?= set_value('confirm_password'); ?>">
                <label for="confirm_password">Confirm Password <sup>*</sup></label>
                <span class="invalid-feedback"><?= isset($validation) ? display_error($validation, 'confirm_password') : ''; ?></span>
              </div>

              <!-- Submit -->
              <input type="submit" class="btn btn-lg w-100 btn-primary mb-3" value="Register">
            </form>
            <div class="pt-4 text-center"><span class="text-muted">Have an account? <a href="<?= base_url('login') ?>">Login here</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end login -->

<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>