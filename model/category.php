<?php
//// insert
//function ins_cat($name){
//    $sql = "INSERT INTO category(name) VALUES ('$name')";
//    pdo_execute($sql);
//}
//
//// delete
//function del_cat($id){
//    $sql = "DELETE FROM category WHERE id =".$id;
//    pdo_execute($sql);
//}
//
//// update
//function update_cat($id, $name){
//    $sql = "UPDATE category SET name ='".$name."' WHERE id=".$id;
//    pdo_execute($sql);
//}
//
//// show danh mục
//function show_cat(){
//    $sql = "SELECT * FROM category ORDER BY id DESC";
//    $list_cat = pdo_query($sql);
//    return $list_cat;
//}
//
//// show 1 danh mục
//function show_one_cat($id){
//    $sql = "SELECT * FROM category WHERE id =".$id;
//    $list_one_cat = pdo_query_one($sql);
//    return $list_one_cat;
//}
//
//?>