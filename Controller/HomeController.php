<?php
	require_once 'Model/sanpham.php';
	class HomeController{
		public function index(){
			$sanpham = Sanpham::view();
			include "View/viewsp.php";
		}
	}
 ?>