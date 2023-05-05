<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>CURD</title>
</head>
<body>

<div class="menu">
    <ul>
        <li><a href="/">Trang chủ</a></li>
    </ul>
</div>
<div class="container">
    <h1>Danh sách người dùng</h1>
    <div>
        <a class="add-btn" href="/create.php">Thêm mới</a>
    </div>



    <div class="content">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Sinh nhật</th>
                <th>Giới tính</th>
                <th>Hành động</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>Huyhq</td>
                <td>huyhq@gmail.com</td>
                <td>Hà nội</td>
                <td>20/20/1999</td>
                <td>Nam</td>
                <td>
                    <a class="btn-edit" href="/edit.php">Sửa</a>
                    <a  class="btn-delete" href="/delete.php">Xoá</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>