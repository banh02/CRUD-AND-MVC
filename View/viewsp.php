<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="Css/index.css">
 </head>
 <body>
    <div class="container">
        <h3>Danh sách sản phẩm</h3>
        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Nhà sản xuất</th>
                <th>Hình ảnh</th>
                <th><a href="./create">Create</a></th>
            </tr>
            <?php foreach ($sanpham as $sanpham):?>
                <tr>
                    <td><?php echo $sanpham->id ?></td>
                    <td><?php echo $sanpham->ten_sp ?></td>
                    <td><?php echo $sanpham->ten_nsx ?></td>
                    <td>
                        <img src="<?php echo $sanpham->hinhanh ?>" width="100">
                    </td>
                    <td>
                        <a href="./update_SP?id=<?php echo $sanpham->id; ?>">Update</a>
                        <a href="./delete_SP?id=<?php echo $sanpham->id; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
 		
 </body>
 </html>