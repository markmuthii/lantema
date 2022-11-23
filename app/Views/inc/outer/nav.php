<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('shop') ?>" class="nav-link">Products</a>
        </li>
        <li class="dropdown nav-item">
          <a href="javascript:" class="nav-link">Categories</a> <label class="px-dropdown-toggle mob-menu"></label>
          <ul class="dropdown-menu left shadow-lg">
            <?php foreach ($categories as $cat) : ?>
              <li><a class="dropdown-item" href="<?= base_url('category') . "/" . $cat["slug"] ?>"><?= $cat["name"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php if (session()->has("user")) : ?>
          <li class="nav-item">
            <a href="<?= base_url('account') ?>" class="nav-link">My Account</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('logout') ?>" class="nav-link">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="<?= base_url('login') ?>" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('register') ?>" class="nav-link">Register</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    <!-- End Menu -->
  </div>
</nav>