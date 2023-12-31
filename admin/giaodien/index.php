<?php
session_start();
include "../../model/pdo.php";
include "../../model/product.php";
include "../../model/buy.php";
include "../../model/thongke.php";
include "../../model/category.php";
include "../../model/user.php";
include "header.php";
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'deleteBuy':
            if (isset($_GET['id_tt']) && ($_GET['id_tt'])>0){
                $idDel = $_GET['id_tt'];
                delBuy($idDel);
            }
            include "../buy/list.php";
            break;
        case 'listBuy':
            include "../buy/list.php";
            break;
        case 'login':
            if(isset($_POST['logad']) && $_POST['logad'] ){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $checkuser=checkuser($user, $pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    header('Location:index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra lại ";
                }

            }
            include "../giaodien/index.php";
            break;
        case 'thongke':
            include "thongke.php";
            break;
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
            if (isset($_GET['id_dm']) && ($_GET['id_dm'])>0){
                del_cat($_GET['id_dm']);
             }
            include "../category/list.php";
            break;
        case 'update_dm':
            $listone = show_one_cat($_GET['id_dm']);
            if (isset($_POST['update_dm'])){
                $id = $_POST['id_dm'];
                update_cat($id, $_POST['name']);
                header("location:?act=list_dm");
            }
            include "../category/update.php";
            break;
 /*end danh mục*/
 /*sản phẩm*/
        case 'add_sp':
            if (isset($_POST['add_sp']) && ($_POST['add_sp'])){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img=$_FILES['img']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                $desc = $_POST['desc'];
                $cat = $_POST['dm'];
                ins_product($name,$price,$img,$desc,$cat);
                header("location:?act=list_sp");
            }

            include "../product/add.php";
            break;
        case 'list_sp':
            include "../product/list.php";
            break;
        case 'update_sp':
            $listonesp = show_one_product($_GET['id_sp']);
            if (isset($_POST['update_sp']) && ($_POST['update_sp'])){
                $id = $_POST['id_sp'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img=$_FILES['img']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                $desc = $_POST['desc'];
                $cat = intval($_POST['dm']);
                update_product($name, $price,$img,$desc,$cat,$id );
                header("location:?act=list_sp");
            }
            include "../product/update.php";
            break;
        case 'delete_sp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'])>0){
                del_product($_GET['id_sp']);
            }
            include "../product/list.php";
            break;
        case 'add_user':
            if (isset($_POST['add_user']) && ($_POST['add_user'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                ins_user($name,$pass,$email,$address,$phone);
                header("location:?act=list_user");
            }
            include "../account/add.php";
            break;
        case 'list_user':
            include "../account/list.php";
            break;
        case 'delete_user':
            if (isset($_GET['id_user']) && ($_GET['id_user']) >0 ){
                  del_user($_GET['id_user']);
            }
            include "../account/list.php";
            break;
        case 'update_user':
            $showone = showone_user($_GET['id_user']);
            if (isset($_POST['update_user'])){
                $id_user = $_POST['id_user'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                upd_user($name, $pass, $email, $address, $phone,$id_user);
                header("Location:?act=list_user");
            }
            include "../account/update.php";
            break;
        case "thongthe":
            include "../giaodien/thongke.php";
            break;
    }
}else{
    include "../giaodien/thongke.php";
}
?>

