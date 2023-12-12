<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/fall.css">
    <title>Document</title>
</head>
<style>
    main{
        display: flex;
        justify-content: center;
        align-content: center;
    }
    .userfall li{
        list-style-type: none;
        font-size: 20px;
    }
    .gh b{
        font-size: 20px;
    }
</style>
<body>
<main>
    <form action="?act=fall" method="post">
        <div class="formall">
            <div class="fall">
                <b>Mua hàng thành công</b>
            </div>
            <div class="prott">
                <div class="gh">
                    <b >Thông tin đơn hàng:</b>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stt = 0;
                    $showbill = showbillone();
                    foreach ($showbill as $data){
                        extract($data);
                        $img = $img_path.$image;
                    }
                    ?>
                    <tr>
                        <td><?php echo $stt += 1 ?></td>
                        <td><img src="<?php echo $img?>" alt=""></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['soluong'] ?></td>
                        <td><?php echo number_format($data['price']) ?>đ</td>
                    </tr>
                    </tbody>
                </table>

                <div class="gh">
                    <b >Thông tin người nhận:</b>
                </div>
                <div class="userfall">
                    <ul>
                        <li>Người đặt hàng: <?php echo $data['user'] ?></li>
                        <li>Số điện thoại: 0<?php echo $data['phone'] ?></li>
                        <li>Địa chỉ: <?php echo $data['diachi'] ?></li>
                        <li>Email: <?php echo $data['email'] ?></li>
                        <li>Ngày mua: <?php echo $data['ngaymua'] ?></li>
                    </ul>
                </div>
                <div class="buttonn">
                    <button class="btn btn-primary" name="dangky">
                        <a href="?act=trangchu" style="color: white; text-decoration: none">Quay về trang chủ</a>
                    </button>
                </div>

            </div>
        </div>
    </form>
</main>
</body>
</html>
