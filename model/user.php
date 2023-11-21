<?php
function show_user(){
    $sql = "SELECT * FROM user";
    $listkh = pdo_query($sql);
    return $listkh;
}

function ins_user($name, $pass, $email, $diachi, $phone ){
    $sql = "INSERT INTO `user`(`user`, `pass`, `email`, `diachi`, phone) 
            VALUES ('$name','$pass','$email','$diachi',$phone)";
    pdo_query($sql);
}

function upd_user($name, $pass, $email, $diachi, $phone, $id_user){
    $sql = "UPDATE `user` SET `user`='$name',`pass`='$pass',`email`='$email',`diachi`='$diachi',`phone`= $phone WHERE id_user= $id_user";
}
function del_user($id){
    $sql = "DELETE FROM user WHERE id_user =".$id;
    pdo_execute($sql);
}
function showone_user($id){
    $sql = "SELECT * FROM user WHERE id_user = $id";
    $showone = pdo_query_one($sql);
    return $showone;
}
