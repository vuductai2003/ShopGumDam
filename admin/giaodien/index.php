<?php
include "../../model/pdo.php";
include "../../model/product.php";
include "../../model/category.php";
include "header.php";
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
/*danh mục*/
        case 'add_dm':
            if (isset($_POST['add_dm']) && ($_POST['add_dm'])){
                $name = $_POST['name'];
                ins_cat($name);
            }
            include "../category/add.php";
            break;
        case 'list_dm':
            include "../category/list.php";
            break;
        case 'delete_dm':
//            if (){
//
//            }
            include "../category/list.php";
            break;
        case 'update_dm':
            if (isset($_POST['update_dm'])){
                $name = $_POST['name'];
                update_cat($name);
            }
            include "../category/update.php";
            break;
 /*end danh mục*/
 /*sản phẩm*/
        case 'add_sp':
            if (isset($_POST['add_sp']) && $_POST['add_sp']){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $cat = $_POST['id_dm'];
                $desc = $_POST['desc'];
                $img=$_FILES['img']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                ins_product($name, $price, $cat, $desc, $img);
            }
            include "../product/add.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
?>

