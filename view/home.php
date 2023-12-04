<style>
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        margin-top: 1px;
    }
    .product{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 30px;
        margin: 30px 30px;
    }
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
    .proItem{
        text-align: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        width: 300px;
    }
    .im{
        display: block;
        margin: 30px 0 15px 47px;
    }
    .im:hover{
        transform: scale(1.1);
        border-radius: 5px;
    }
    h2{
        margin-left: 30px;
        margin-top: 15px;
    }
    .product_main{
        margin-top: 50px;
        border-radius: 10px;
    }
    .slides{
        padding-left: 365px;
        padding-top: 10px;
        background-color: white;
    }
</style>
<div class="slides">
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width: 1200px;">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/images/banner.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/images/banner3.jpg" alt="New York" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


<main>
    <div class="product_main">
        <div class="product">
            <?php
                foreach ($showsp as $sp){
                    extract($sp);
                    $hinh =  $img_path.$image;
                    $actsp = "?act=sanphamchitiet&id_sp=".$id_sp;
                    echo '
                     <div class="proItem">
                <img src="'.$hinh.'" alt="" width="200px" height="200px" class="im">
                <a href="'.$actsp.'" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                <p>'.number_format($price).'đ</p>
            </div>
                    ';
                }
            ?>
        </div>
    </div>
</main>