<?php 

require_once 'Connect/connect.php';
class TongDiemChitiet extends Database_ql_diem
{
	public function HDS($text_diem)
	{
		return parent::H_Diem($text_diem);
	}
	public function DC($text_diem)
	{
		return parent::Diem_C($text_diem);
	}
	public function XL_TK($text_diem)
	{
		return parent::XL($text_diem);
	}
	// lấy môn cho từng sinh viên
	public function DiemHP($txt_sinhvien)
	{
		$sql = "SELECT s.ma_sv, s.hoten_sv, m.ma_mon, m.ten_mon, m.sotinchi, d.diem_giua_ky, d.diem_thi_hp, h.ten_hk FROM monhocphan m, sinhvien s, diemhocphan d, hocky h WHERE m.ma_mon = d.ma_mon AND s.ma_sv = d.ma_sv AND s.ma_sv = '$txt_sinhvien' AND m.ma_hk = h.ma_hk GROUP BY s.ma_sv, s.hoten_sv, m.ma_mon, m.ten_mon, m.sotinchi, d.diem_giua_ky, d.diem_thi_hp, h.ten_hk";
		return parent::Getdata($sql);
	}
	public function TDiem($txt_sinhvien)
	{
		$sql = "SELECT m.ma_mon, m.ten_mon, m.sotinchi,d.diem_giua_ky,d.diem_thi_hp,s.ma_sv,s.hoten_sv,s.ngay_sinh,s.gioi_tinh,s.dan_toc,s.noi_sinh FROM monhocphan m, diemhocphan d, sinhvien s WHERE m.ma_mon=d.ma_mon AND d.ma_sv=s.ma_sv AND s.ma_sv='$txt_sinhvien' GROUP BY m.ma_mon, m.ten_mon, m.sotinchi,d.diem_giua_ky,d.diem_thi_hp,s.ma_sv,s.hoten_sv,s.ngay_sinh,s.gioi_tinh,s.dan_toc,s.noi_sinh";
		return parent::Getdata($sql);
	}
	public function Thong_ke()
	{
		$sql = "SELECT * FROM sinhvien s, lop l, monhocphan m, diemhocphan d, hocky h WHERE s.ma_sv = d.ma_sv AND s.ma_lop = l.ma_lop AND m.ma_mon = d.ma_mon AND m.ma_hk = h.ma_hk ORDER BY s.ma_sv ASC";
		return parent::Getdata($sql);
	}
}

 ?>