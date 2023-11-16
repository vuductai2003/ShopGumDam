<?php
//function ins_product($name, $price, $image, $desc, $id_cat){
//    $sql = "INSERT INTO product(name, price, image, desc, id_cat) VALUES ('$name','$price','$image','$desc','$id_cat')";
//    pdo_execute($sql);
//}
//
//function del_product($id){
//    $sql = "DELETE FROM product WHERE id=".$id;
//    pdo_execute($sql);
//}
//
//function update_product($name, $price, $image, $desc, $id_cat, $id){
//    if ($image!=""){
//        $sql="UPDATE product SET id_cat='".$id_cat."', name='".$name."', price='".$price."', image='".$image."', desc='".$desc."'  where id=".$id;
//    } else{
//        $sql="UPDATE product SET id_cat='".$id_cat."', name='".$name."', price='".$price."', desc='".$desc."'  where id=".$id;
//    }
//    pdo_execute($sql);
//}
//
//function show_product_home(){
//    $sql = "select * from product where 1 order by id desc limit 0,9";
//    $list_product = pdo_query($sql);
//    return $list_product;
//}
//
//function show_one_product($id){
//    $sql="select * from product where id=".$id;
//    $list_product=pdo_query_one($sql);
//    return $list_product;
//}
//
//function show_product_cungloai($id, $id_cat){
//    $sql="select * from product where id_cat=$id_cat & id <> $id";
//    $list_product = pdo_query($sql);
//    return  $list_product;
//}
//?>