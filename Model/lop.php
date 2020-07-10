<?php 

require_once 'Connect/connect.php';
class Lop extends Database_ql_diem
{
	public function ADD($text_malop,$text_tenlop)
	{
		$sql = "INSERT INTO lop(ma_lop, ten_lop) VALUES ('$text_malop','$text_tenlop')";
		return parent::Execute($sql);
	}
	public function List_id($text_malop)
	{
		$sql = "SELECT * FROM lop WHERE lop.ma_lop = '$text_malop'";
		return parent::Getdata($sql);
	}
	public function Edit($text_malop,$text_tenlop,$id_text_malop)
	{
		$sql = "UPDATE lop SET ma_lop='$text_malop',ten_lop='$text_tenlop' WHERE ma_lop='$id_text_malop'";
		return parent::Execute($sql);
	}
	public function Delete($text_malop)
	{
		$sql = "DELETE FROM lop WHERE lop.ma_lop = '$text_malop'";
		return parent::Execute($sql);
	}
	public function List()
	{
		$sql = "SELECT * FROM lop";
		return parent::Getdata($sql);
	}
	public function Lop_Sinhvien($txt_malop)
	{
		$sql = "SELECT sinhvien.ma_sv, sinhvien.hoten_sv FROM sinhvien,lop WHERE sinhvien.ma_lop = lop.ma_lop AND sinhvien.ma_lop='$txt_malop'";
		return parent::Getdata($sql);
	}
	public function getTime()
	{
		$sql = "SELECT NOW() AS Thoigian";
		return parent::Getdata($sql);
	}
}

 ?>