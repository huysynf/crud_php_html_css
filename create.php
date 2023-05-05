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
        <h1>Thêm mới người dùng</h1>
        <div>
            <a class="add-btn" href="./index.php">Danh sách</a>
        </div>



            <div class="content">
                <form class="createForm" method="post" action="./store.php">
                    <div class="form-group">
                        <label for="">Họ tên</label>  
                        <input class="form-control" type="text" name="name" /> 
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>  
                        <input class="form-control" type="email" name="email" /> 
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>  
                        <textarea class="form-control" name="address" > </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Sinh nhật</label>  
                        <input class="form-control" type="date" name="birthday" /> 
                    </div>
                    <div class="form-group">
                        <label for="">Giới tính</label>  
                        <input class="" type="radio" name="gender"  value="1"/> Nam
                        <input class="" type="radio" name="gender"  value="0"/> Nữ
                    </div>
                    <div class="form-group">
                       <button name="create" class="btn-create">Thêm mới</button>
                    </div>
                </form>
            </div>
    </div>

    
</body>
</html>