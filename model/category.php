<?php

function ins_cat($name){
    $sql = "INSERT INTO danhmuc(name_dm) VALUES ('$name')";
    pdo_execute($sql);
}

// delete
function del_cat($id){
    $sql = "DELETE FROM danhmuc WHERE id_dm =".$id;
    pdo_execute($sql);
}

// update
function update_cat($id, $name){
    $sql = "UPDATE danhmuc SET name_dm='$name' WHERE id_dm= $id";
    pdo_execute($sql);
}

// show danh mục
function show_cat(){
    $sql = "SELECT * FROM danhmuc ";
    $list_cat = pdo_query($sql);
    return $list_cat;
}

// show 1 danh mục
function show_one_cat($id){
    $sql = "SELECT * FROM danhmuc WHERE id_dm =".$id;
    $list_one_cat = pdo_query_one($sql);
    return $list_one_cat;
}


