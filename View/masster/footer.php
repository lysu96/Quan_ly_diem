<ul class="sidebar navbar-nav">
	<li class="nav-item active">
		<a class="nav-link" href="index.php?controllers=quanly&action=Admin">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Bảng Sinh viên</span>
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
			<span>Tổng hợp Điểm chi tiết</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="index.php?controllers=diem&action=Thong_ke">
			<i class="fas fa-fw fa-table"></i>
			<span>Thống kê</span>
		</a>
	</li>
</ul>