<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<br><br><br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead class="thead-dark">
        <tr>
            <th colspan="2"><h1><b>Chỉnh sửa mặt hàng</b></h1></th>
        </tr>
        <tr>
            <td>Tên hàng</td>
            <td><input style="width: 280px" name="name" type="text" required value="<?php echo $product["name"]; ?>"></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td><input style="width: 280px" name="type" type="text" required value="<?php echo $product["type"]; ?>"></td>
        </tr>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input name="price" style="width: 280px" type="text" required value="<?php echo $product["price"]; ?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input name="count" style="width: 280px" type="text" required value="<?php echo $product["count"]; ?>"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input name="note" style="width: 280px" type="text" required value="<?php echo $product["note"]; ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>
                <a  href="http://localhost/Example/index.php">Trở về</a>
            </td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Cập nhật</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
<style>

</style>

</html>
