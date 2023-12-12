<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop Gundam GR5</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--    boottrap-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../css/app.js"></script>
</head>
<body>
    <header class="header">
        <div class="wrapper-header">
            <div class="logo">
                <a href="index.php"><h6 class="logo-name"><img src="../img/images/logo1.png" width="50" height="50"></h6></a>
            </div>
            <nav class="navigate">
                <a href="?act=trangchu" class="navigate-link">Trang chủ</a>
                <a href="?act=tintuc" class="navigate-link">Giới thiệu  </a>
<!--                <a href="" class="navigate-link "> Liên hệ </a>-->
                <a href="?act=product" class="navigate-link"> Sản phẩm  </a>
            </nav>

            <form class="d-flex" action="?act=trangchu" method="post">
                <input class="form-control me-2" type="search"  aria-label="Search" style="width: 326px;" name="seach_name">
                <button type="submit" style="background-color: black; border: none" name="seach"><i class="fas fa-search fa-lg" style="color: white;"></i></button>
            </form>
            <div class="icon-cart">
<!--                <a href=""><i class="fas fa-shopping-cart fa-lg" style="color: white"></i></a>-->
                <div class="space" style="margin: 0 20px"></div>
                <?php 
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                ?>
                    <a href="?act=dangnhap"><i class="fas fa-user fa-lg" style="color: white"></i></a>
                <?php
                } else {
                    ?>
                    <a href="?act=dangnhap" style = "color: white; text-decoration: none">Đăng nhập/ Đăng kí</a>
                    <?php
                }
                ?>
            </div>
</header>
