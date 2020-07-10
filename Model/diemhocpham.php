<?php 

require_once 'Connect/connect.php';
class DiemMHP extends Database_ql_diem
{
	public function ADD($text_masv,$text_mamon,$text_diemgk,$text_diemthk)
	{
		$sql = "INSERT INTO diemhocphan(ma_sv, ma_mon, diem_giua_ky, diem_thi_hp) VALUES ('$text_masv','$text_mamon','$text_diemgk','$text_diemthk')";
		return parent::Execute($sql);
	}
	public function Edit($text_masv,$text_mamon,$text_diemgk,$text_diemthk)
	{
		$sql = "UPDATE diemhocphan SET ma_sv='$text_masv',ma_mon='$text_mamon',diem_giua_ky='$text_diemgk',diem_thi_hp='$text_diemthk' WHERE diemhocphan.ma_sv = '$text_masv' AND diemhocphan.ma_mon='$text_mamon'";
		return parent::Execute($sql);
	}
	public function Delete($text_masv,$text_mamon)
	{
		$sql = "DELETE FROM diemhocphan WHERE diemhocphan.ma_sv = '$text_masv' AND diemhocphan.ma_mon='$text_mamon'";
		return parent::Execute($sql);
	}
	// lấy tất cả môn cho từng sinh viên 
	public function List($text_masv)
	{
		$sql = "SELECT * FROM sinhvien s, lop l, monhocphan m, diemhocphan d, hocky h WHERE s.ma_sv = d.ma_sv AND s.ma_lop = l.ma_lop AND m.ma_mon = d.ma_mon AND m.ma_hk = h.ma_hk AND s.ma_sv= '$text_masv'";
		return parent::Getdata($sql);
	}
	// lấy ds sinh viên trong 1 lớp
	public function Lop_Sinhvien($txt_malop)
	{
		$sql = "SELECT * FROM sinhvien,lop WHERE sinhvien.ma_lop = lop.ma_lop AND sinhvien.ma_lop='$txt_malop'";
		return parent::Getdata($sql);
	}
	// lấy từng môn của từng sinh viên
	public function D_M_SV($text_masv,$text_mamon)
	{
		$sql = "SELECT * FROM monhocphan m, sinhvien s, diemhocphan d WHERE m.ma_mon = d.ma_mon AND d.ma_sv = s.ma_sv AND d.ma_mon = '$text_mamon' AND d.ma_sv = '$text_masv'";
		return parent::Getdata($sql);
	}
}

 ?>