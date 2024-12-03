<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Css/index.css">
	<title></title>
</head>
<body>
	<div class="create">
		<h1>Create</h1>
		<form action="save_SP" method="POST" enctype="multipart/form-data">
			<label>Tên sản phẩm: </label> <br>
			<input type="text" name="tensp"> <br>

			<label>Nhà sản xuất:</label> <br>
			<select name="nsx">
				<option value="2">Samsung</option>
				<option value="1">Iphone</option>
			</select>

			<label>Hình ảnh:</label> <br>
			<input type="file" name="image"> <br>

			<div class="btn">
				<button>Create</button>
			</div>
		</form>
	</div>
</body>
</html>