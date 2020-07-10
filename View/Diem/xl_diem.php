<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>

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

    <!-- Thanh công cụ footer-->
    <?php require_once 'View/masster/footer.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Bảng điểu kiểm</a>
          </li>
          <li class="breadcrumb-item active">Điểm học phần</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Bảng điểm học phần sinh viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <!-- TL -->
              <!-- <form action="#" method="POST">
                <div class="input-group mt-3 mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                      Danh sách lớp
                    </button>
                    <div class="dropdown-menu">
                    <?php foreach ($list_lop as $value) {
                    ?>
                      <a class="dropdown-item" href="index.php?controllers=diem&action=Edit_Diem&maLop=<?php echo $value['ma_lop']; ?>"><?php echo $value['ten_lop']; ?></a>
                    <?php } ?>
                    </div>
                  </div>
                  <select class="form-control" id="sel1" name="sellist1">
                    <?php foreach ($list_sv as $value) {
                      ?>
                      <option value="<?php echo $value['ma_sv']; ?>"><?php echo $value['hoten_sv']; ?></option>
                    <?php } ?>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="xemDiem">Hiện thị</button>  
                  </div>
                </div>
              </form> -->
              <!-- End TL -->
              <!-- TL -->
              <form action="#" method="POST">
                <div class="input-group mt-3 mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                     <!--  Danh sách lớp -->

                      <?php 
                      if (isset($value['ma_lop'])) {
                        echo $value['ten_lop'];
                      }
                      else
                      echo "Danh sách lớp";
                       ?>
                    </button>
                    <div class="dropdown-menu">
                    <?php foreach ($list_lop as $value) {
                    ?>
                      <a class="dropdown-item" href="index.php?controllers=diem&action=QL_Diem&maLop=<?php echo $value['ma_lop']; ?>"><?php echo $value['ten_lop']; ?></a>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                      Danh sách Sinh viên
                    </button>
                    <div class="dropdown-menu">
                    <?php 
                    if (isset($list_sv)) {
                      foreach ($list_sv as $value) {
                    ?>
                      <a class="dropdown-item" href="index.php?controllers=diem&action=QL_Diem&maSV=<?php echo $value['ma_sv']."&maLop=".$value['ma_lop']; ?>"><?php echo $value['hoten_sv']; ?></a>
                    <?php }} ?>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End TL -->
              <div>
                <a href="index.php?controllers=diem&action=Add_Diem_HP"><button class="btn btn-primary" type="submit">Thêm mới</button></a>  
              </div>
              <br/>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã môn</th>
                    <th>Tên môn</th>
                    <th>Số tín chỉ</th>
                    <th>Điểm Giữa kỳ</th>
                    <th>Diểm thi học kỳ</th>
                    <th>Điểm học phần</th>
                    <th>Học kỳ</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // echo "<pre>";
                    // print_r($dHP);
                    if (isset($dHP)) {
                    $STT = 0;
                    foreach ($dHP as $value) {
                      $STT++;
                      $TBHP = ($value['diem_giua_ky']*0.3)+($value['diem_thi_hp']*0.7);
                   ?>
                  <tr>
                    <td><?php echo $STT; ?></td>
                    <td><?php echo $value['ma_mon']; ?></td>
                    <td><?php echo $value['ten_mon']; ?></td>
                    <td><?php echo $value['sotinchi']; ?></td>
                    <td><?php echo $value['diem_giua_ky']; ?></td>
                    <td><?php echo $value['diem_thi_hp']; ?></td>
                    <td><?php echo round($TBHP,1); ?></td>
                    <td><?php echo $value['ten_hk']; ?></td>
                    <td>
                      <a href="index.php?controllers=diem&action=Edit_Diem_HP&maSV=<?php echo $value['ma_sv']."&maMon=".$value['ma_mon']; ?>" title="Sửa"><i class="fas fa-edit"></i> </a>
                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?controllers=diem&action=Delete_Diem_HP&maSV=<?php echo $value['ma_sv']."&maMon=".$value['ma_mon']; ?>" title="Xóa"><i class="fas fa-trash-alt"> </i></a>
                    </td>
                  </tr>
                  <?php 
                    }}
                   ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Cập nhật ngày hôm qua lúc 11:59</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <!-- <?php include 'footer.php'; ?> -->

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

<!-- Custom scripts for all pages-->
<script src="bootstraps/js/sb-admin.min.js"></script>
<!-- Demo scripts for this page-->
<script src="bootstraps/js/demo/datatables-demo.js"></script>
<script src="bootstraps/js/demo/chart-area-demo.js"></script>
</html>
