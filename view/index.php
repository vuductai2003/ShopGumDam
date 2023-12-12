<?php
session_start();
include "../model/pdo.php";
include "../model/product.php";
include "../model/category.php";
include "../model/user.php";
include "../model/seach.php";
include "../model/buy.php";
include "../model/comment.php";
include "../global.php";
include "../view/header.php";


$showsp = show_productt();
if (isset($_GET['act']) && ($_GET['act'] !="")){
    $act = $_GET['act'];
    switch ($act){
        case 'fall':
            include "../view/fall.php";
            break;
        case 'lichsu':
            if (isset($_GET['id_user'])){
                $da = $_GET['id_user'];
                $data = getbill($da);
            }
            include "../view/hictory.php";
            break;
        case 'trangchu':
            $showsp = show_product();
            if (isset($_POST['seach'])){
                $showsp = seach($_POST['seach_name']);
            }
            include "../view/home.php";
            break;
        case 'thanhtoan':
            if (isset($_GET['id_sp'])){
                $id = $_GET['id_sp'];
                $onesp = show_one_product($id);
                include "../view/thanhtoan.php";
            }
            if (isset($_POST['buy'])){
                $name = $_POST['ttUser'];
                $phone = $_POST['phone'];
                $pro = $_POST['idssp'];
                $sl = $_POST['sluong'];
                $price = $_POST['price'];
                $ghichu = $_POST['ghichu'];
                $diachi = $_POST['address'];
                buy($name, $phone, $pro, $sl, $price, $ghichu, $diachi);
                header("location: ?act=fall&id_sp=$pro");
            }
            break;
        case 'sanphamchitiet':
            if (isset($_GET['id_sp'])){
                $id = $_GET['id_sp'];
                $onesp = show_one_product($id);
            }
            if (isset($_POST['add_comment'])){
                $header = $_REQUEST['id_sp'];
                $id_user = $_POST['id_user'];
                $commen = $_POST['bl'];
                $idsp = $_POST['id_pro'];
                insert_binhluan($commen, $id_user, $idsp);
            }
            include "../view/chitietsanpham.php";
            break;
        case 'product':
            include "../view/product.php";
            break;
        case 'tintuc':
            include "../view/new.php";
            break;
        case 'dangnhap':
            if (isset($_POST['login'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check = checkuser($user, $pass);
                if (is_array($check)){
                    $_SESSION['user'] = $check;
                    $_SESSION['pass'] = $check;
                    header("Location: index.php");
                } else {
                    $errol = "Tài khoản hoặc mật khẩu không chính xác !";
                }
            }
            include "account-user/log-in.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($name, $pass, $email);
                $errol = "Đăng ký tài khoản thành công !";
            }
            include "account-user/dangky.php";
            break;
        case 'reset_mk':
            if (isset($_POST['reset'])){
                $email = $_POST['email'];
                $check = checkemail($email);
                if (is_array($check)) {
                    $errol = "Mật khẩu của bạn là: " .$check['pass'];
                } else {
                    $errol = "Email này không tồn tại";
                }
            }
            include "account-user/reset_mk.php";
            break;
        case "update_user":
            if (isset($_POST['update'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $id = $_POST['id'];
                upd_user($name, $pass, $email, $id);
                $errol = "Cập nhật tài khoản thành công !";
            }
            include "account-user/update_user.php";
            break;
        case 'delete_user':
            if (isset($_GET['id_user']) && ($_GET['id_user'])>0){
                del_user($_GET['id_user']);
                session_unset();
                header('Location: index.php');
            }
            break;
        case "exit":
            session_unset();
            header('Location: index.php');
            break;
        default:
            break;
    }
} else{
    include "../view/home.php";
}
include "../view/footer.php";
?>
