<?php
session_start();
require_once 'Model/dangnhap.php';
require_once 'Model/lop.php';
require_once 'Model/sinhvien.php';
require_once 'Model/Diemchitiep.php';
require_once 'Model/hocky.php';
require_once 'Model/monhocphan.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
	//Tìm kiếm
	case 'Seach':
		if (isset($_POST['Timkiem'])) {
			$gtTimkiem = $_POST['gtTimkiem'];
			$list_sv = Sinhvien::Seach($gtTimkiem);
		}
		require_once 'View/masster/admin.php';
		break;
	// xử lý lớp
	case 'List_lop':
		$listlop = Lop::List();
		$time = Lop::getTime();
		require_once 'View/Bang/tbl_lop_list.php';
		break;
	case 'Add_lop':
		if (isset($_POST['themLop'])) {
			$txt_malop = $_POST['txt_malop'];
			$txt_tenlop = $_POST['txt_tenlop'];

			if (Lop::ADD($txt_malop,$txt_tenlop)) {
				header("location:index.php?controllers=quanly&action=List_lop");
			}
			else
			{
				$thatbai = "Thêm thất bại...Do mã lớp đã tồn tại!";
			}
		}
		require_once 'View/Bang/tbl_lop_add.php';
		break;
	case 'Edit_lop':
		if (isset($_GET['maLop'])) {
			$maLop = $_GET['maLop'];
			$list_id_lop = Lop::List_id($maLop);

			if (isset($_POST['suaLop'])) {
				$txt_malop = $_POST['txt_malop'];
				$txt_tenlop = $_POST['txt_tenlop'];

				if (Lop::Edit($txt_malop,$txt_tenlop,$maLop)) {
					header("location:index.php?controllers=quanly&action=List_lop");
				}
				else
				{
					$thatbai = "Sửa thất bại...Do mã lớp đã tồn tại!";
				}
			}
		}
		require_once 'View/Bang/tbl_lop_edit.php';
		break;
	case 'Delete_lop':
		if (isset($_GET['maLop'])) {
			$txt_malop = $_GET['maLop'];

			if (Lop::Delete($txt_malop)) {
				header("location:index.php?controllers=quanly&action=List_lop");
			}
			else
			{
				echo "Xóa thất bại..!";
			}
		}
		break;
	// xử lý học kỳ
	case 'list_hocky':
		$listhocky = Hocky::List();
		require_once 'View/Bang/tbl_hocky_list.php';
		break;
	case 'Add_hocky':
		if (isset($_POST['themHocky'])) {
			$txt_malop = $_POST['txt_mahocky'];
			$txt_tenlop = $_POST['txt_tenhocky'];

			if (Hocky::ADD($txt_malop,$txt_tenlop)) {
				header("location:index.php?controllers=quanly&action=list_hocky");
			}
			else
			{
				$thatbai = "Thêm thất bại...Do mã học kỳ đã tồn tại!";
			}
		}
		require_once 'View/Bang/tbl_hocky_add.php';
		break;
	case 'Edit_hocky':
		if (isset($_GET['maHocky'])) {
			$maHocky = $_GET['maHocky'];
			$list_id_hocky = Hocky::List_id($maHocky);

			if (isset($_POST['suaHocky'])) {
				$txt_mahocky = $_POST['txt_mahocky'];
				$txt_tenhocky = $_POST['txt_tenhocky'];

				if (Hocky::Edit($txt_mahocky,$txt_tenhocky,$maHocky)) {
					header("location:index.php?controllers=quanly&action=list_hocky");
				}
				else
				{
					$thatbai = "Sửa thất bại...Do mã học kỳ đã tồn tại!";
				}
			}
		}
		require_once 'View/Bang/tbl_hocky_edit.php';
		break;
	case 'Delete_hocky':
		if (isset($_GET['maHocky'])) {
			$txt_mahocky = $_GET['maHocky'];

			if (Hocky::Delete($txt_mahocky)) {
				header("location:index.php?controllers=quanly&action=list_hocky");
			}
			else
			{
				echo "Xóa thất bại..!";
			}
		}
		echo "Xóa hoc ky";
		break;
	// xử lý học phần
	case 'list_hocphan':
		$listhocphan = MonHP::List();
		require_once 'View/Bang/tbl_hocphan_list.php';
		break;
	case 'Add_hocphan':
		$listhocky = Hocky::List();
		if (isset($_POST['themHocphan'])) {
			$txt_maHocphan = $_POST['txt_maHocphan'];
			$txt_tenHocphan = $_POST['txt_tenHocphan'];
			$txt_stc = $_POST['txt_stc'];
			$txt_mahocky = $_POST['sellist1'];

			// echo $txt_maHocphan."<br/>";
			// echo $txt_tenHocphan."<br/>";
			// echo $txt_stc."<br/>";
			// echo $txt_mahocky."<br/>";

			if (MonHP::ADD($txt_maHocphan,$txt_tenHocphan,$txt_stc,$txt_mahocky)) {
				header("location:index.php?controllers=quanly&action=list_hocphan");
			}
			else
			{
				$thatbai = "Thêm thất bại...Do mã học phần đã tồn tại!";
			}
		}
		require_once 'View/Bang/tbl_hocphan_add.php';
		break;
	case 'Edit_hocphan':
		if (isset($_GET['maMon'])) {
			$maMon = $_GET['maMon'];
			$listhocky = Hocky::List();
			$list_id_hocphan = MonHP::id_DHP($maMon);

			if (isset($_POST['suaHocphan'])) {
				$txt_maHocphan = $_POST['txt_maHocphan'];
				$txt_tenHocphan = $_POST['txt_tenHocphan'];
				$txt_stc = $_POST['txt_stc'];
				$txt_mahocky = $_POST['sellist1'];

				if (MonHP::Edit($txt_maHocphan,$txt_tenHocphan,$txt_stc,$txt_mahocky,$maMon)) {
					header("location:index.php?controllers=quanly&action=list_hocphan");
				}
				else
				{
					$thatbai = "Sửa thất bại...Do mã học phần đã tồn tại!";
				}
			}
		}
		require_once 'View/Bang/tbl_hocphan_edit.php';
		break;
	case 'Delete_hocphan':
		if (isset($_GET['maMon'])) {
			$maMon = $_GET['maMon'];

			if (MonHP::Delete($maMon)) {
				header("location:index.php?controllers=quanly&action=list_hocphan");
			}
			else
			{
				echo "Xóa thất bại..!";
			}
		}
		break;
	// xử lý sinh viên
	case 'Add':
		$list_lop = Lop::List();
		if (isset($_POST['Add'])) {
			$txt_masv = $_POST['txt_masv'];
			$txt_hoten = $_POST['txt_hoten'];
			$txt_ngaysinh = $_POST['txt_ngaysinh'];
			$txt_gioitinh = $_POST['txt_gioitinh'];
			$txt_dantoc = $_POST['txt_dantoc'];
			$txt_noisinh = $_POST['txt_noisinh'];
			$txt_malop = $_POST['txt_malop'];

			$ngaysinh = date('Y-m-d',strtotime($txt_ngaysinh));

			if (Sinhvien::ADD($txt_masv,$txt_hoten,$ngaysinh,$txt_gioitinh,$txt_dantoc,$txt_noisinh,$txt_malop)) {
				header("location:index.php?controllers=quanly&action=Admin");
			}
			else
			{
				$thatbai = "Thêm thất bại..!";
			}

		}
		require_once 'View/sinhvien/Add.php';
		break;
	case 'Edit':
		$list_lop = Lop::List();
		if (isset($_GET['maSV'])) {
			$maSV = $_GET['maSV'];
			$list_sv = Sinhvien::GetId($maSV);

			if (isset($_POST['Edit'])) {
				$txt_masv = $_POST['txt_masv'];
				$txt_hoten = $_POST['txt_hoten'];
				$txt_ngaysinh = $_POST['txt_ngaysinh'];
				$txt_gioitinh = $_POST['txt_gioitinh'];
				$txt_dantoc = $_POST['txt_dantoc'];
				$txt_noisinh = $_POST['txt_noisinh'];
				$txt_malop = $_POST['txt_malop'];

				$ngaysinh = date('Y-m-d',strtotime($txt_ngaysinh));

				if (Sinhvien::Edit($txt_masv,$txt_hoten,$ngaysinh,$txt_gioitinh,$txt_dantoc,$txt_noisinh,$txt_malop,$id)) {
				header("location:index.php?controllers=quanly&action=Admin");
			}
			else
			{
				$thatbai = "Sửa thất bại..!";
			}
				
			}
		}
		require_once 'View/sinhvien/Edit.php';
		break;
	case 'Delete':
		if (isset($_GET['maSV'])) {
			$maSV = $_GET['maSV'];
			if (Sinhvien::Delete($maSV)) {
				header("location:index.php?controllers=quanly&action=Admin");
			}
			else
			{
				echo "Xóa thất bại..!";
			}
		}
		break;
	case 'Admin':
		$list_sv = Sinhvien::List();
		require_once 'View/masster/admin.php';
		break;
	default:
		echo "Trang không tồn tại";
		break;
}


 ?>