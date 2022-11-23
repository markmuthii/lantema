<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?= explode("index.php/", $_SERVER["PHP_SELF"])[1] ==  get_user_info("role_identifier") ? "active" : "";  ?>" aria-current="page" href="<?= base_url(get_user_info('role_identifier')); ?>">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>

      <?php if (get_user_info("role_identifier") === "admin") : ?>
        <li class="nav-item">
          <a class="nav-link <?= explode("index.php/", $_SERVER["PHP_SELF"])[1] == "admin/categories" ? "active" : "";  ?>" href="<?= base_url('admin/categories'); ?>">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= explode("index.php/", $_SERVER["PHP_SELF"])[1] == "admin/products" ? "active" : "";  ?>" href="<?= base_url('admin/products'); ?>">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= explode("index.php/", $_SERVER["PHP_SELF"])[1] == "admin/orders" ? "active" : "";  ?>" href="<?= base_url('admin/orders'); ?>">
            <span data-feather="file" class="align-text-bottom"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= explode("index.php/", $_SERVER["PHP_SELF"])[1] == "admin/customers" ? "active" : "";  ?>" href="<?= base_url('admin/customers'); ?>">
            <span data-feather="users" class="align-text-bottom"></span>
            Customers
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>