<?php
//include "../model/pdo.php";
//include "../model/product.php";
//include "../model/category.php";
//include "header.php";
//
//if (isset($_GET['act'])){
//    $act = $_GET['act'];
//    switch ($act){
//        case 'quanlydanhmuc':
//            if (isset($_POST['add']) && ($_POST['add'])){
//                $tendm = $_POST['namedm'];
//                ins_cat($tendm);
//                $thongbao = "Thêm thành công";
//            }
//            $listdm = show_cat();
//            include "category/add.php";
//            break;
//        case 'addsp':
//            if (isset($_POST['addsp']) && ($_POST['addsp'])) {
////                $iddm = $_POST['id_dm'];
//                $name = $_POST['name'];
//                $price = $_POST['price'];
//                $desc = $_POST['desc'];
//                $img = $_FILES['image']['name'];
//                $target_dir = "../img";
//                $target_file = $target_dir . basename($_FILES['image']['name']);
//                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
//                ins_product($name, $price, $desc, $img);
//            }
//            break;
//        default:
//            include "header.php";
//            break;
//    }
//}