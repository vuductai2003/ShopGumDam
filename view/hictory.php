<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    main{
        display: flex;
        justify-content: center;
        margin: 30px 0 196px 0;
    }
    .table{
        width: 1200px;
    }
    .hea p {
        font-size: 30px;
    }
</style>
<body>
<main>
    <div class="table">
        <div class="hea">
            <p>Lịch sử mua hàng</p>
        </div>
        <form action="?act=lichsu" method="post">
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thời gian đặt</th>
                    <th>Trạng thái</th>
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
                    <td><?php echo $data['ngaymua'] ?></td>
                    <td><?php echo $data['tinhtrang']?></td>
                </tr>
                </tbody>
            </table>
        </form>

    </div>
</main>
</body>
</html>