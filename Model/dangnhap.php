<?php 

require_once 'Connect/connect.php';
class Dangnhap extends Database_ql_diem
{
	public function ADD($text_hoten,$text_username,$text_password,$text_email)
	{
		$sql = "INSERT INTO dangnhap(hoten, username, password, emai) VALUES ('$text_hoten','$text_username','$text_password','$text_email')";
		return parent::Execute($sql);
	}
	public function Edit($text_hoten,$text_username,$text_password,$text_email,$id)
	{
		$sql = "UPDATE dangnhap SET hoten='$text_hoten',username='$text_username',password='$text_password',emai='$text_email' WHERE dangnhap.username = '$id'";
		return parent::Execute($sql);
	}
	public function Delete($text_username)
	{
		$sql = "DELETE FROM dangnhap WHERE dangnhap.username = '$text_username'";
		return parent::Execute($sql);
	}
	public function List_id($text_username)
	{
		$sql = "SELECT * FROM dangnhap WHERE dangnhap.username = '$text_username'";
		return parent::Getdata($sql);
	}
	public function List()
	{
		$sql = "SELECT * FROM dangnhap";
		return parent::Getdata($sql);
	}
}

 ?>