<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="<?php echo $base_url; ?>/assets/img/logo1.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Mimi Farm</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'dashboard' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/home.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'user' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/user.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">people</i>
          </div>
          <span class="nav-link-text ms-1">user</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'metode pembayaran' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/metode_pembayaran.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">payments</i>
          </div>
          <span class="nav-link-text ms-1">metode pembayaran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'kategori menu' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/kategori_menu.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">label</i>
          </div>
          <span class="nav-link-text ms-1">kategori menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'menu' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/menu.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">menu_book</i>
          </div>
          <span class="nav-link-text ms-1">menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= strtolower($title) == 'billing' ? 'active bg-gradient-primary' : '' ?>" href="<?php echo $base_url; ?>owner/billing.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Billing</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="<?= $base_url ?>logout.php" type="button">Logout</a>
    </div>
  </div>
</aside>