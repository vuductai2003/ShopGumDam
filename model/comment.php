<?php
function insert_binhluan($noidung,$iduser,$idpro){
    $sql= "INSERT INTO `binhluan` (`noidung`, `iduser`, `ngaybinhluan`, `idsanpham`) VALUES ('$noidung','$iduser',NOW(),'$idpro')";
    pdo_execute($sql);
}
function loadall_binhluan($idsp){
    $sql="select * from binhluan join user u on u.id_user = binhluan.iduser where `idsanpham` = '$idsp'";
    $listbl=pdo_query($sql);
    return  $listbl;
}
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id ;
    pdo_execute($sql);
}
