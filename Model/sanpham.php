<?php 
	require_once 'BaseModel.php';
	class Sanpham extends BaseModel{
		public $tableName = 'sanpham';
		public $columns = ['ma_sp','ten_sp','ma_nsx','hinhanh'];
	}
 ?>