<?php

function buy($user,$tel, $pro, $sl, $price, $desc, $diachi){
    $sql = "INSERT INTO `thanhtoan` (tenkhachhang, phone, tensanpham, soluong, price, `desc_tt`, ngaymua, `diachi`, `tinhtrang`) 
    VALUES ('$user', '$tel', '$pro', '$sl', '$price', '$desc', NOW(), '$diachi','Đang xử lý')";
    pdo_execute($sql);
}

function showbill(){
    $sql = "select * from thanhtoan join user u on u.id_user = thanhtoan.tenkhachhang join sanpham s on s.id_sp = thanhtoan.tensanpham";
    return pdo_query($sql);
}
function delBuy($id_tt){
    $sql = "DELETE FROM thanhtoan WHERE id_tt=".$id_tt;
    pdo_execute($sql);
}
function showbillone(){
    $sql = "
SELECT * FROM thanhtoan join sanpham s on s.id_sp = thanhtoan.tensanpham join user u on u.id_user = thanhtoan.tenkhachhang
WHERE id_tt = (
    SELECT MAX(id_tt)
    FROM thanhtoan
)";
    return pdo_query($sql);
}

function getbill($id_user){
    $sql = "SELECT * FROM thanhtoan join user u on u.id_user = thanhtoan.tenkhachhang join sanpham s on s.id_sp = thanhtoan.tensanpham WHERE tenkhachhang = $id_user ORDER BY id_tt DESC LIMIT 1";
    return pdo_query($sql);
}

