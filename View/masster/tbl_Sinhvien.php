<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Bảng điểu kiểm</a>
          </li>
          <li class="breadcrumb-item active">Danh sách sinh viên</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tất cả sinh viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Dân tộc</th>
                    <th>Nơi sinh</th>
                    <th>Lớp</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // echo "<pre>";
                    // print_r($list_sv);
                    $STT = 0;
                    if ($list_sv!=0) {
                    foreach ($list_sv as $value) {
                      $STT++;
                   ?>
                  <tr>
                    <td><?php echo $STT; ?></td>
                    <td><?php echo $value['ma_sv']; ?></td>
                    <td><?php echo $value['hoten_sv']; ?></td>
                    <td><?php echo date('d-m-Y',strtotime($value['ngay_sinh'])); ?></td>
                    <td><?php echo $value['gioi_tinh']; ?></td>
                    <td><?php echo $value['dan_toc']; ?></td>
                    <td><?php echo $value['noi_sinh']; ?></td>
                    <td><?php echo $value['ten_lop']; ?></td>
                    <td>
                      <a href="index.php?controllers=quanly&action=Edit&maSV=<?php echo $value['ma_sv']; ?>" title="Sửa"><i class="fas fa-edit"></i> </a>
                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?controllers=quanly&action=Delete&maSV=<?php echo $value['ma_sv']; ?>" title="Xóa"><i class="fas fa-trash-alt"> </i></a>
                      <a href="index.php?controllers=diem&action=List_Diem&maSV=<?php echo $value['ma_sv']; ?>" title="chi tiết"><i class="fas fa-eye"> </i></a>
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