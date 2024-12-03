<?php 
	class ActionController {
		public function create(){
			include_once 'View/create.php';
		}
		public function saveSP(){
			$tensp = $_POST['tensp'];
			$nsx = $_POST['nsx'];
			$image = $_FILES['image'];

			$sanpham = new Sanpham();
			$sanpham->ten_sp = $tensp;
			$sanpham->ma_nsx = $nsx;
			$fileName = "";
			if ($image ['size'] > 0) {
				$fileName = 'upload/'.time().'_'.$image['name'];
				move_uploaded_file($image['tmp_name'], $fileName);
			}
			$sanpham->hinhanh = $fileName;
			$sanpham->insert();
			header('location:sanpham');
		}
		public function updateSP(){
			$id = $_GET['id'];
			$sanpham = Sanpham::find($id);
			if ($sanpham == null) {
				header('location:sanpham');
			}
			include "View/edit.php";

		}
		public function saveupdateSP() {
			$id = $_POST['id'];
			$tensp = $_POST['tensp'];
			$nsx = $_POST['nsx'];
			$hinhanh = $_FILES['image'];

			$sanpham = Sanpham::find($id);
			$sanpham->ten_sp = $tensp;
			$sanpham->ma_nsx = $nsx;
			$fileName = "";
			if ($hinhanh ['size'] > 0) {
				$fileName = 'upload/'.time().'_'.$hinhanh['name'];
				move_uploaded_file($hinhanh['tmp_name'], $fileName);
			}
			$sanpham->hinhanh = $fileName;
			$sanpham->update();
			header('location:sanpham');
		}
		public function deleteSP(){
			$id = $_GET['id'];
			$sanpham = Sanpham::find($id);
			if ($sanpham) {
				$sanpham->delete('GET',[]);
			}
			header('location:sanpham');
		}
	}
 ?>