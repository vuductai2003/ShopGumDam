<?php
function show_product(){
    $sql = "SELECT * FROM sanpham join danhmuc on sanpham.iddm = danhmuc.id_dm";
    $list_pro = pdo_query($sql);
    return $list_pro;
}
function show_productt(){
    $sql = "SELECT * FROM sanpham LIMIT 12";
    $list_pro = pdo_query($sql);
    return $list_pro;
}

function ins_product($name, $price,$img, $desc, $id_cat){
    $sql = "INSERT INTO sanpham(name, price,image, mota, iddm) 
    VALUES ('$name',$price,'$img','$desc',$id_cat)";
    pdo_execute($sql);
}

function del_product($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sp =".$id_sp;
    pdo_execute($sql);
}

function update_product($name, $price, $image, $desc, $id_cat, $id){
    if ($image!=""){
        $sql ="UPDATE sanpham SET iddm='".$id_cat."', name='".$name."', price='".$price."', image='".$image."', mota='".$desc."'  where id_sp= ".$id;
    } else{
        $sql ="UPDATE sanpham SET iddm='".$id_cat."', name='".$name."', price='".$price."', mota='".$desc."'  where id_sp= ".$id;
    }
    pdo_execute($sql);
}


function show_product_home(){
    $sql = "select * from sanpham where 1 order by id_sp desc limit 0,9";
    $list_product = pdo_query($sql);
    return $list_product;
}

function show_one_product($id){
    $sql = "select * from sanpham where id_sp=".$id;
    $list_product = pdo_query_one($sql);
    return $list_product;
}

function show_product_cungloai($id, $id_cat){
    $sql="select * from sanpham where iddm=$id_cat & id_sp <> $id";
    $list_product = pdo_query($sql);
    return  $list_product;
}

function getPro($id_dm){
    $sql = "SELECT * FROM sanpham join danhmuc on sanpham.iddm = danhmuc.id_dm where iddm = $id_dm";
    $list = pdo_query($sql);
    return $list;
}
function getdm($id_dm){
    $sql = "SELECT name_dm FROM danhmuc WHERE id_dm = $id_dm";
    $list = pdo_query($sql);
    return $list;
}

function show_producttt(){
    $sql = "SELECT * FROM sanpham LIMIT 4";
    $list_pr = pdo_query($sql);
    return $list_pr;
}