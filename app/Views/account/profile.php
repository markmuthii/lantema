<?php

$title = "Profile";

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
        <div class="card mb-5">
          <div class="card-header py-3">
            <h5 class="m-0">Profile</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 mb-3">
                <label class="form-label">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="<?= get_user_info("first_name"); ?>" disabled>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="<?= get_user_info("last_name"); ?>" disabled>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label">Email address<span class="text-danger">*</span></label>
                <input type="email" class="form-control" value="<?= get_user_info("email"); ?>" disabled>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="<?= get_user_info("telephone"); ?>" disabled>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-3">
            <h5 class="m-0">Change your password</h5>
          </div>
          <div class="card-body p-4">
            <form>
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <div class="form-group"><label for="password_old" class="form-label">Old password</label> <input type="password" id="password_old" class="form-control"></div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="form-group"><label for="password_1" class="form-label">New password</label> <input type="password" id="password_1" class="form-control"></div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="form-group"><label for="password_2" class="form-label">Retype new password</label><input type="password" id="password_2" class="form-control"></div>
                </div>
                <div class="col-12 pt-2"><button class="btn btn-primary">Change password</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Content -->
    </div>
  </div>
</div>
<!--Table -->

<?php require APPROOT . '/Views/inc/outer/footer.php'; ?>