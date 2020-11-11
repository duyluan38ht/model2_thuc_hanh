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

<br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead class="thead-dark">
        <tr>
            <td colspan="2"><h1><b>Thêm mặt hàng</b></h1></td>
        </tr>
        <tr>
            <td>Tên hàng</td>
            <td><input style="width: 280px" name="name" type="text" required></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td>
                <select name="type">
                    <option>Điện thoại</option>
                    <option>Điều hòa</option>
                    <option>Tủ lạnh</option>
                    <option>Tivi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input name="price" style="width: 280px" type="text" required></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input name="count" style="width: 280px" type="text" required></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea name="note" style="width: 280px" type="text" required></textarea></td>
        </tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="http://localhost/Example/index.php">Trở về</a>
            </td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Thêm</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>

</html>