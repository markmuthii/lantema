<!-- Profile Menu -->
<div class="col-lg-4 pb-4 pb-lg-0 col-xxl-3 pe-xxl-5">
  <div class="bg-white border border-bottom-0 shadow-lg">
    <div class="d-flex p-3 align-items-center">
      <div class="col ps-3">
        <h6 class="m-0"><?= get_user_info("first_name") . " " . get_user_info("last_name"); ?></h6>
        <small><a href="#"><?= get_user_info("email"); ?></a></small>
      </div>
    </div>
    <div class="bg-gray-200 p-3 border-bottom border-top">
      <h6 class="m-0">Dashboard</h6>
    </div>
    <ul class="list-unstyled mb-0 theme-link">
      <li class="border-bottom mb-0">
        <a class="nav-link-style d-flex align-items-center p-3" href="<?= base_url("account/orders") ?>">
          <i class="bi bi-bag me-2"></i> Orders
        </a>
      </li>
    </ul>
    <div class="bg-gray-200 p-3 border-bottom">
      <h6 class="m-0">Account settings</h6>
    </div>
    <ul class="list-unstyled mb-0 theme-link">
      <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center active p-3" href="<?= base_url("account") ?>"><i class="fi-user me-2"></i>Profile</a></li>
      <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center p-3" href="<?= base_url("logout") ?>"><i class="bi bi-box-arrow-left me-2"></i>Logout</a></li>
    </ul>
  </div>
</div>
<!-- End Profile Menu -->