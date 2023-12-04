<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
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
        img{
            display: block;
            margin:30px 0 15px 47px ;
        }
        img:hover{
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
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
 <main>
     <div class="product_main">
        <?php 
            $dm = getdm(12);
            foreach($dm as $d){
                extract($d);
                echo '<h2>'.$name_dm.'</h2>';
            }
        ?>
         <div class="product">
             <?php
             $sho = getPro(12);
             foreach ($sho as $sp){
                 extract($sp);
                 $hinh =  $img_path.$image;
                 $actsp = "?act=sanphamchitiet&id_sp=".$id_sp;
                 echo '
                    <div class="proItem">
                    <img src="'.$hinh.'" alt="" width="200px" height="200px">
                     <a href="'.$actsp.'" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                    <p>'.number_format($price).'đ</p>
             </div>
            ';
             }
             ?>
         </div>
     </div>
 </main>
 <main>
     <div class="product_main">
     <?php 
            $dm = getdm(16);
            foreach($dm as $d){
                extract($d);
                echo '<h2>'.$name_dm.'</h2>';
            }
        ?>
         <div class="product">
             <?php
             $sho = getPro(16);
             foreach ($sho as $sp){
                 extract($sp);
                 $hinh =  $img_path.$image;
                 $actsp = "?act=sanphamchitiet&name_sp=".$name;
                 echo '
                    <div class="proItem">
                    <img src="'.$hinh.'" alt="" width="200px" height="200px">
                     <a href="" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                    <p>'.number_format($price).'đ</p>
             </div>
            ';
             }
             ?>
         </div>
     </div>
 </main>
 <main>
     <div class="product_main">
         <?php
         $dm = getdm(13);
         foreach($dm as $d){
             extract($d);
             echo '<h2>'.$name_dm.'</h2>';
         }
         ?>
         <div class="product">
             <?php
             $sho = getPro(13);
             foreach ($sho as $sp){
                 extract($sp);
                 $hinh =  $img_path.$image;
                 $actsp = "?act=sanphamchitiet&name_sp=".$name;
                 echo '
                    <div class="proItem">
                    <img src="'.$hinh.'" alt="" width="200px" height="200px">
                     <a href="" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                    <p>'.number_format($price).'đ</p>
             </div>
            ';
             }
             ?>
         </div>
     </div>
 </main>
 <main>
     <div class="product_main">
         <?php
         $dm = getdm(14);
         foreach($dm as $d){
             extract($d);
             echo '<h2>'.$name_dm.'</h2>';
         }
         ?>
         <div class="product">
             <?php
             $sho = getPro(14);
             foreach ($sho as $sp){
                 extract($sp);
                 $hinh =  $img_path.$image;
                 $actsp = "?act=sanphamchitiet&name_sp=".$name;
                 echo '
                    <div class="proItem">
                    <img src="'.$hinh.'" alt="" width="200px" height="200px">
                     <a href="" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                    <p>'.number_format($price).'đ</p>
             </div>
            ';
             }
             ?>
         </div>
     </div>
 </main>
 <main>
     <div class="product_main">
         <?php
         $dm = getdm(15);
         foreach($dm as $d){
             extract($d);
             echo '<h2>'.$name_dm.'</h2>';
         }
         ?>
         <div class="product">
             <?php
             $sho = getPro(15);
             foreach ($sho as $sp){
                 extract($sp);
                 $hinh =  $img_path.$image;
                 $actsp = "?act=sanphamchitiet&name_sp=".$name;
                 echo '
                    <div class="proItem">
                    <img src="'.$hinh.'" alt="" width="200px" height="200px">
                     <a href="" class="a">'.mb_substr($name,0,30,'UTF-8').'</a>
                    <p>'.number_format($price).'đ</p>
             </div>
            ';
             }
             ?>
         </div>
     </div>
 </main>
</body>
</html>
