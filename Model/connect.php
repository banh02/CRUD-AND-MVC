<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	$dbname ="Project_SP";
	try{
		$conn = new  PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username, $password);
		echo" ket noi thanh CONG";
		
	}
	catch(PDOException $e){
		var_dump($e->getMessage());die;
		echo " ket noi KHONG thanh cong";
		die;
	}
	// var_dump($conn);
	//die;

	$sql = "SELECT * FROM sanpham";
	$stmt = $conn->prepare($sql);
	$stmt ->execute();
	$sanpham = $stmt->fetchall();
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link rel="stylesheet" href="index.css">
 </head>
 <body>
 		
 		<table>
 			<tr>
 				<th>Mã sản phẩm</th>
 				<th>Tên sản phẩm</th>
 				<th>Nhà sản xuất</th>
 				<th>Hình ảnh</th>
 			</tr>
 			<?php foreach ($sanpham as $sanpham):?>
 				<tr>
 					<td><?php echo $sanpham['id']?></td>
 					<td><?php echo $sanpham['ten_sp']?></td>
 					<td><?php echo $sanpham['ma_nsx']?></td>
 					<td>
 						<img src="<?php echo $sanpham['hinhanh']?>">
 					</td>
 				</tr>
 			<?php endforeach ?>
 		</table>
 </body>
 </html>