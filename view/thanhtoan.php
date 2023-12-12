<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/thanhtoan.css">
    <title>Document</title>
</head>
<body>
<main>
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
        ?>
        <!--mua hàng-->
        <div class="container mt-3" >
            <div class="bl">
                <h5 style="font-size: 20px"><b>Thông tin mua hàng</b></h5>
            </div>
            <form action="?act=thanhtoan" method="post">
                <div class="form_father">
                    <!--phần thông tin thanh toán-->
                    <div class="proUser">
                        <div class="userInput">
                            <div class="mb-3 mt-3">
                                <label for="email">Họ và tên</label>
                                <input type="text" class="form-control" id="email" value="<?= $user?>" name="name">
                                <input type="hidden" value="<?= $id_user?>" name="ttUser">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Số điện thoại:</label>
                                <input type="tel" class="form-control" id="email" name="phone">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" value="<?= $email?>" name="email">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Địa chỉ:</label>
                                <input type="text" class="form-control" id="email" placeholder="" name="address">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email"><b>Ghi chú:</b></label>
                                <textarea class="form-control" rows="5" id="comment" name="ghichu" style="width: 470px; resize: none"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end khách hàng-->
                    <div class="form_c"></div>
                    <!--Phần sản phẩm thanh toán-->
                    <div class="listPro">
                        <div class="tablePro">
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
                                    extract($onesp);
                                    $hinh =  $img_path.$image;
                                    $actfall = "?act=fall&id_sp=$id_sp"
                                ?>
                                <input type="hidden" name="idssp" value="<?php echo $onesp['id_sp'];?>">
                                <tr>
                                    <td><?php echo $stt += 1;?></td>
                                    <td><img src="<?php echo $hinh ?>" alt=""></td>
                                    <td><?php echo $onesp['name']?></td>
                                    <td>
                                        <div class="sluong">
                                            <input type="number" name="sluong" min="0" max="10" value="1">
                                        </div>
                                    </td>
                                    <td><?php echo number_format($onesp['price']);?>đ</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="pptt" >
                                <h5 style="font-size: 20px"><b>Phương thức thanh toán</b></h5>
                                    <form>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Chuyển khoản qua số tài khoản</label>
                                        </div>
                                    </form>
                            </div>
                            <div class="buy">
                                <b style="font-size: 20px">Thành tiền: <?php echo number_format($onesp['price'] * 1);?>đ</b>
                                <input type="hidden" name="price" value="<?php echo number_format($onesp['price'] * 1);?>">
                            </div>
                            <button class="btn btn-primary" type="submit" name="buy">
                                <a href="<?php echo $actfall?>"></a>
                                Thanh toán
                            </button>
                        </div>

                    </div>
                    <!--end pro thanh toán-->
                </div>

            </form>
        </div>
</main>
</body>
</html>
