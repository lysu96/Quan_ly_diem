<?php 
require_once 'Connect/connect.php';
class Hocky extends Database_ql_diem
{
	public function ADD($text_mahoky,$text_tenhocky)
	{
		$sql = "INSERT INTO hocky(ma_hk, ten_hk) VALUES ('$text_mahoky','$text_tenhocky')";
		return parent::Execute($sql);
	}
	public function List_id($id_text_mahocky)
	{
		$sql = "SELECT * FROM hocky WHERE hocky.ma_hk = '$id_text_mahocky'";
		return parent::Getdata($sql);
	}
	public function Edit($text_mahoky,$text_tenhocky,$id_text_mahocky)
	{
		$sql = "UPDATE hocky SET ma_hk='$text_mahoky',ten_hk='$text_tenhocky' WHERE ma_hk='$id_text_mahocky'";
		return parent::Execute($sql);
	}
	public function Delete($id_text_mahocky)
	{
		$sql = "DELETE FROM hocky WHERE hocky.ma_hk = '$id_text_mahocky'";
		return parent::Execute($sql);
	}
	public function List()
	{
		$sql = "SELECT * FROM hocky";
		return parent::Getdata($sql);
	}
}

 ?>