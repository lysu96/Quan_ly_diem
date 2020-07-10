<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Thêm Điểm học phần</title>

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
    <?php require_once 'View/masster/footer.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php?controllers=quanly&action=Admin">Bảng điểu kiểm</a>
          </li>
          <li class="breadcrumb-item active">Thêm điểm</li>
        </ol>

        <!-- DataTables Example -->
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Thêm điểm học phần</div>
            <div class="card-body">
              <form action="#" method="POST">
                <?php if (isset($thatbai)) {
                  echo "<span style='color:red'>".($thatbai)."</span>";
                }
                elseif (isset($thanhcong)) {
                  echo "<span style='color:green'>".($thanhcong)."</span>";
                }
                 ?>
                <div class="form-group">
                  <label for="sel1">Họ và tên</label>
                  <select class="form-control" id="sel1" name="sellist1">
                  <?php 
                    foreach ($list_sv as $value) {
                     ?>
                    <option value="<?php echo $value['ma_sv']; ?>"><?php echo $value['hoten_sv']; ?></option>
                  <?php } ?>
                  </select>
                  <br>
                  <label for="sel2">Tên học phần</label>
                  <select class="form-control" id="sel2" name="sellist2" size="3">
                    <?php 
                    foreach ($list_hp as $value) {
                     ?>
                    <option value="<?php echo $value['ma_mon']; ?>"><?php echo $value['ten_mon']; ?></option>
                  <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="txt_diemGK" id="inputdiemGK" class="form-control" placeholder="Điểm giữa kỳ" required="required">
                    <label for="inputdiemGK">Điểm giữa kỳ</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="txt_diemTHK" id="inputdiemTHK" class="form-control" placeholder="Điểm thi học kỳ" required="required">
                    <label for="inputdiemTHK">Điểm thi học kỳ</label>
                  </div>
                </div>
                <input type="submit" name="themDiem" class="btn btn-primary btn-block" value="Thêm">
              </form>
            </div>
          </div>
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
