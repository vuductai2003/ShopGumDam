<!doctype html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .formlogin{
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.14);
        }
        a{
            text-decoration: none;
            color: white;
        }
        form{
            margin: 50px 50px;
        }
    </style>
</head>
<body>
<div class="formlogin">
    <form action="?act=login">
        <h3>Đăng nhập Admin</h3>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Tên đăng nhập: </label>
            <input type="email" class="form-control" id="email" placeholder="" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Mật khẩu: </label>
            <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ tài khoản
            </label>
        </div>
        <button type="submit" class="btn btn-primary"><a href="giaodien/index.php">Đăng nhập</a></button>
    </form>
</div>
</body>
</html>