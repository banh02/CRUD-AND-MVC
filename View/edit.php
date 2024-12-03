<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Css/index.css">
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Sửa thông tin sản phẩm</h1>
		<form action="save_update_SP" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $sanpham->id; ?>">
			<label>Tên sản phẩm</label>
			<input type="text" name="tensp" value="<?php echo $sanpham->ten_sp ?>"> 
			<br>
			<br>
			<label>Nhà sản xuất</label>
			<select name="nsx" value="<?php echo $sanpham->ma_nsx ?>" >
				<option value="2">Samsung</option>
				<option value="1">Apple</option>
			</select>
			<br>
			<br>
			<label>Hình ảnh</label>
			<input type="file" name="image">
			<br>
			<br>
			<div class="btn">
				<button>EDIT</button>
			</div>

		</form>
	</div>
</body>
</html>