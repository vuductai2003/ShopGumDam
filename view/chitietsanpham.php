<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/spct.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div class="mainPro">
        <div class="mainItem">
            <div class="image">
                <?php
                extract($onesp);
                $hinh =  $img_path.$image;
                $actt = "?act=thanhtoan&id_sp=$id_sp";
                ?>
                <img class="imgSp" src="<?php echo $hinh?>" alt="">
            </div>
            <div class="name">
                <h3><?php echo $onesp['name']?></h3>
                <b style="font-size: 30px; color: red"><?php echo number_format($onesp['price']) ?>đ</b>
                <div class="input">
                    <?php
                    if (isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        ?>
                        <button class="btn_sp" name="add_to_cart" type="submit"><a href="">Thêm vào giỏ hàng</a></button>
                        <button class="btn_sp" name="addBill" type="submit"><a href="<?php echo $actt?>">Mua ngay</a></button>
                    <?php
                    } else{
                        ?>
                        <button class="btn_sp" name="add_to_cart" type="submit"><a href="">Thêm vào giỏ hàng</a></button>
                        <button class="btn_sp" name="addBill" type="submit"><a href="?act=dangnhap">Mua ngay</a></button>
                    <?php
                    }
                    ?>

                </div>
                <div class="table">
                    <li class="l"><b>Chỉ có tại Gundam Chất</b></li>
                    <li class="l">Sản phẩm an toàn</li>
                    <li class="l">Chất lượng cam kết</li>
                    <li class="l">Dịch vụ vượt trội</li>
                    <li class="l">Giao hàng nhanh chóng</li>
                </div>
            </div>
        </div>
    </div>
</form>

    <div class="desc">
        <div class="td">
            <h5><b>Thông tin chi tiết</b></h5>
        </div>
        <div class="dc"></div>
        <pre style="font-family: 'Times New Roman'; font-size: 20px; margin-left: 20px; word-wrap: break-word;">
           <?php echo $onesp['mota']?>
        </pre>
    </div>

    <div class="comment">
        <div class="bl">
            <h5><b>Bình luận</b></h5>
        </div>
        <div class="dc"></div>
        <?php
        $us = $_REQUEST['id_sp'];
        $showbl = loadall_binhluan($us);
        foreach ($showbl as $s){
            extract($s);
            echo '
                <div class="user">
            <form action="" method="post">
                <div class="userName">
                    <b style="font-size: 25px">'.$user.'</b> <p style="font-size: 15px">'.$ngaybinhluan.'</p>
                </div>
                <div class="userBl">
                    <pre style="font-size: 17px; font-family: Times New Roman">'.$noidung.'</pre>
                </div>
            </form>
        </div> <br>
            ';
        }
        ?>



        <?php
        if (isset($_SESSION['user'])){
            extract($_SESSION['user']);
            ?>
            <div class="dc"></div>
            <div class="formBl">
                <div class="container mt-3">
                    <form action="" method="post">
                        <?php
                        if (isset($_SESSION['user'])){
                            $idd = $_SESSION['user'];
                            extract($idd);
                            ?>
                            <input type="hidden" name="id_user" value="<?php echo $idd['id_user'] ?>">
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['id_sp'])){
                            $sp_id = $_GET['id_sp'];
                        }
                        ?>
                        <input type="hidden" name="id_pro" value="<?php echo $sp_id  ?>">
                        <div class="mb-3 mt-3">
                            <label for="email"><b>Viết bình luận:</b></label>
                            <textarea class="form-control" rows="5" id="comment" name="bl" style="width: 700px; resize: none"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" name="add_comment">Bình luận</button>
                    </form>
                </div>
            </div>
                <?php
        } else {
            ?>
            <h5 style="padding: 0 0 20px 20px;"><a href="?act=dangnhap">Đăng nhập</a> để bình luận</h5>
            <?php
        }
        ?>

    </div>
    <div class="productAlike">
        <div class="bl">
            <h5><b>Sản phẩm khác</b></h5>
        </div>
        <div class="dc"></div>
        <div class="product">
            <?php
                $ss = show_producttt();
            foreach ($ss as $sp) {
                extract($sp);
                $hinh = $img_path . $image;
                $actsp = "?act=sanphamchitiet&id_sp=" .$id_sp;
                echo '
                    <div class="proItem">
                <img src="'.$hinh.'" alt="" width="200px" height="200px">
                <a href="" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                <p >'.number_format($price).'đ</p>
             </div>
                ';
            }
            ?>
        </div>
    </div>
</body>
</html>

<style>
    .proItem p{
        text-decoration: none;
        color: red;
        font-size: 23px;

    }
    .a{
        text-decoration: none;
        color: black;
        font-size: 23px;
    }

    .a:hover{
        color: blue;
    }
</style>