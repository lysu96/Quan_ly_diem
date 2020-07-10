<?php 
if (isset($_SESSION['username'])) {
  $user = $_SESSION['username'];
}

?>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php?controllers=quanly&action=Admin">Quản lý Điểm</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="index.php?controllers=quanly&action=Seach">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form action="index.php?controllers=quanly&action=Seach" method="POST" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
            <input type="text" class="form-control" name="gtTimkiem" placeholder="Tìm kiếm...">
            <div class="input-group-append">
              <button class="btn btn-success" name="Timkiem" type="submit">Tìm kiếm</button>  
            </div>
          </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="index.php?controllers=login&action=cai_dat&username=<?php echo $user; ?>">Cài đặt</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng xuất</a>
        </div>
      </li>
    </ul>

  </nav>