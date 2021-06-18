<?php 

class Database_ql_diem
{
	private static $hostname = "localhost";
	private static $username = "root";
	private static $password = "";
	private static $database ="quan_ly_diem";
	protected static $conn = NULL;
	
	public static function Connect()
		{
			self::$conn = mysqli_connect(self::$hostname,self::$username,self::$password,self::$database);

			if (!self::$conn) {
				echo "kết nối thất bại";
			}
			else
			{
				//echo "kết nối thàng công";
				mysqli_set_charset(self::$conn,'utf8');
			}
		}
	public function Execute($sql)
		{
			$retuln = self::$conn->query($sql);
			return $retuln;
		}	
	public function Getdata($sql)
	{
		$retuln = self::Execute($sql);
		$arr = array();
		if (mysqli_num_rows($retuln)>0) {
			while ($arrs = mysqli_fetch_array($retuln)) {
				$arr[] = $arrs;
			}
		}
		else
		{
			$arr = 0;
		}
		return $arr;
	}
	// xử lý Điểm
	public function H_Diem($diem)
	{
		if ($diem >= 8.5) {
			$d = 4;
		}
		elseif ($diem >= 7) {
			$d = 3;
		}
		elseif ($diem >= 5.5) {
			$d = 2;
		}
		elseif ($diem >= 4) {
			$d = 1;
		}
		else
		{
			$d = 0;
		}
		return $d;
	}
	public function Diem_C($diem)
	{
		if ($diem >= 8.5) {
			$d = "A";
		}
		elseif ($diem >= 7) {
			$d = "B";
		}
		elseif ($diem >= 5.5) {
			$d = "C";
		}
		elseif ($diem >= 4) {
			$d = "D";
		}
		else
		{
			$d = "F";
		}
		return $d;
	}
	public function XL($diem)
	{
		if ($diem >= 3.6) {
			$xl = "Xuất sắc";
		}
		elseif ($diem >= 3.2) {
			$xl = "Giỏi";
		}
		elseif ($diem >= 2.5) {
			$xl = "Khá";
		}
		elseif ($diem >= 2) {
			$xl = "Trung bình";
		}
		else
		{
			$xl = "Yếu";
		}
		return $xl;
	}

}
 ?>