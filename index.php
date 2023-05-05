<?php
require_once 'pdo.php';

$users = selectUser();
?>
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
        <a class="add-btn" href="./create.php">Thêm mới</a>
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

            <? if(count($users) >0):
                foreach ($users as $item):
                ?>

            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['address'] ?></td>
                <td><?= $item['birthday'] ?></td>
                <td><?= $item['gender'] ? 'Nam' : 'Nữ' ?></td>
                <td>
                    <form action="./delete.php" id="deleteForm" method="post">
                        <input type="hidden" name="id" value="<?=$item['id'] ?>">
                    </form>
                    <a class="btn-edit" href="./edit.php?id=<?=$item['id'] ?>">Sửa</a>
                    <button  class="btn-delete" form="deleteForm">Xoá</button>

                </td>
            </tr>
            <? endforeach; else: ?>
                <tr>
                    <td colspan="7"> Không có user nào</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>