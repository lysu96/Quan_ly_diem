<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tổng hợp điểm</title>

  <!-- phông chữ-->
  <link href="bootstraps/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- trang pluin-->
  <link href="bootstraps/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- phong cách-->
  <link href="bootstraps/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- header -->
  <?php require_once 'View/masster/header.php'; ?>

  <div id="wrapper">

    <!-- Thanh công cụ -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controllers=quanly&action=Admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Bảng điều khiển</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quản lý</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Chức năng:</h6>
          <a class="dropdown-item" href="index.php?controllers=quanly&action=Add">Thêm sinh viên</a>
          <a class="dropdown-item" href="index.php?controllers=diem&action=QL_Diem">Quản lý điểm</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Bảng:</h6>
          <a class="dropdown-item" href="index.php?controllers=quanly&action=List_lop">Lớp</a>
          <a class="dropdown-item" href="index.php?controllers=quanly&action=list_hocky">Học kỳ</a>
          <a class="dropdown-item" href="index.php?controllers=quanly&action=list_hocphan">Học phần</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controllers=diem&action=Tonghopdiem">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Tổng hợp Điểm chi tiết</span></a>
      </li>
      <li class="nav-item">
        <form action="#" method="POST">
          <label for="sel1" style="color: #FFFFFF;">Chọn lớp</label>

          <div class="input-group mb-3">
            <select class="form-control" name="txt_malop" >
              <?php foreach ($list_lop as $value) {

                ?>
                <option  value="<?php echo $value['ma_lop']; ?>"><?php echo $value['ten_lop']; ?></option>
              <?php } ?>
            </select>
            <div class="input-group-append">
              <button type="submit" name="Hienthi" class="btn btn-primary">Hiển thị</button>
            </div>
          </div>

        </form>
        <form action="#" method="POST">
          <div class="form-group">
            <label for="sel2" style="color: #FFFFFF;">Danh sách sinh viên</label>
            <select class="form-control" id="sel2" name="txt_masinhvien" size="8">
              <?php 
                foreach ($list_lop_sinhvien as $value) {
              ?>
              <option value="<?php echo $value['ma_sv'] ?>"><?php echo $value['hoten_sv'] ?></option>
              <a href=""><?php echo $value['hoten_sv'] ?></a>
              <?php } ?>
            </select>
            <div class="input-group-append">
              <button type="submit" name="xem" class="btn btn-primary">Xem chi tiết Sinh viên</button>
            </div>
          </div>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controllers=diem&action=Thong_ke">
          <i class="fas fa-fw fa-table"></i>
          <span>Thống kê</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Bảng điểu kiểm</a>
          </li>
          <li class="breadcrumb-item active">Tổng hợp chi tiết điểm</li>
        </ol>

        <!-- DataTables Demo -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Bảng tổng hợp Điểm chi tiết sinh viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <!-- TT -->
              <!-- TBL -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã môn</th>
                    <th>Tên môn</th>
                    <th>Số tín chỉ</th>
                    <th>Điểm học phần</th>
                    <th>Điểm chữ</th>
                    <th>Hệ Điểm số</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // echo "<pre>";
                    // print_r($ttDiem);
                  $STT = 0;
                  $TongSTC = NULL;
                  $TongHDS = NULL;

                  if (isset($ttDiem)) {
                    foreach ($ttDiem as $value) {
                      $STT++;

                      $diemHP = round(($value['diem_giua_ky']*0.3)+($value['diem_thi_hp']*0.7),1);
                      $diemchu = TongDiemChitiet::DC($diemHP);
                      $diemheso = TongDiemChitiet::HDS($diemHP);
                      
                      $TinhDHS = $value['sotinchi']*$diemheso;

                      $TongSTC += $value['sotinchi'];
                      $TongHDS += $TinhDHS;

                      ?>
                      <tr>
                        <td><?php echo $STT; ?></td>
                        <td><?php echo $value['ma_mon']; ?></td>
                        <td><?php echo $value['ten_mon']; ?></td>
                        <td><?php echo $value['sotinchi']; ?></td>
                        <td><?php echo $diemHP; ?></td>
                        <td><?php echo $diemchu; ?></td>
                        <td><?php echo $diemheso; ?></td>
                      </tr>
                      <?php 
                    }}
                    ?>
                  </tbody>
                </table>
                <!-- END TBL -->
                <!-- TT -->
                <table width="100%">
               
                <?php 
                if (isset($ttDiem)) {
                  $tbtk = round($TongHDS/$TongSTC,2);
                  $xltk = TongDiemChitiet::XL_TK($TongHDS/$TongSTC);
                ?>
                <tr>
                  <th>Mã sinh viên: </th>
                  <td><?php if (isset($value['ma_sv'])) {
                    echo $value['ma_sv'];
                  } ?></td>
                  <th>Nơi sinh: </th>
                  <td><?php if (isset($value['noi_sinh'])) {
                    echo $value['noi_sinh'];
                  } ?></td>
                  <th></th>
                  <td></td>
                </tr>
                <tr>
                  <th>Họ và tên: </th>
                  <td><?php if (isset($value['hoten_sv'])) {
                    echo $value['hoten_sv'];
                  } ?></td>
                  <th>Giới tính: </th>
                  <td><?php if (isset($value['gioi_tinh'])) {
                    echo $value['gioi_tinh'];
                  } ?></td>
                  <th>TB toàn khóa: </th>
                  <td><?php if (isset($tbtk)) {
                    echo $tbtk;
                  } ?></td>
                </tr>
                <tr>
                  <th>Ngày sinh: </th>
                  <td><?php if (isset($value['ngay_sinh'])) {
                    echo date('d-m-Y',strtotime($value['ngay_sinh']));
                  } ?></td>
                  <th>Dân tộc: </th>
                  <td><?php if (isset($value['dan_toc'])) {
                    echo $value['dan_toc'];
                  } ?></td>
                  <th>XL toàn khóa: </th>
                  <td><?php if (isset($xltk)) {
                    echo $xltk;
                  } ?></td>
                </tr>
                <?php } ?>
              </table>
              <!-- END TT -->
              </div>
            </div>
            <div class="card-footer small text-muted">Cập nhật ngày hôm qua lúc 11:59</div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng đang xuất?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn có chắc chắn muốn đăng xuất tài khoản không?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="index.php">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="bootstraps/vendor/jquery/jquery.min.js"></script>
<script src="bootstraps/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="bootstraps/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="bootstraps/vendor/chart.js/Chart.min.js"></script>
<script src="bootstraps/vendor/datatables/jquery.dataTables.js"></script>
<script src="bootstraps/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="bootstraps/js/sb-admin.min.js"></script>
<!-- Demo scripts for this page-->
<script src="bootstraps/js/demo/datatables-demo.js"></script>
<script src="bootstraps/js/demo/chart-area-demo.js"></script>
</html>
