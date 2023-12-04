<?php
function show_user(){
    $sql = "SELECT * FROM user";
    $listkh = pdo_query($sql);
    return $listkh;
}

function ins_user($name, $pass, $email, $diachi, $phone ){
    $sql = "INSERT INTO `user`(`user`, `pass`, `email`, `diachi`, phone) VALUES ('$name','$pass','$email','$diachi',$phone)";
    pdo_query($sql);
}

function upd_user($name, $pass, $email, $id_user){
    $sql = "UPDATE `user` SET `user`='$name',`pass`='$pass',`email`='$email' WHERE id_user= $id_user";
}
function del_user($id_user){
    $sql = "DELETE FROM user WHERE id_user =".$id_user;
    pdo_execute($sql);
}
function showone_user($id){
    $sql = "SELECT * FROM user WHERE id_user = $id";
    $showone = pdo_query_one($sql);
    return $showone;
}
function insert_taikhoan($user, $pass, $email){
    $sql="INSERT INTO `user` ( `user`, `pass`, `email`) VALUES ( '$user', '$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from `user` where user ='".$user."' AND `pass` ='".$pass."'" ;
    $check=pdo_query_one($sql);
    return $check;
}

function checkemail($email){
    $sql="select * from `user` where email ='".$email."'";
    $check = pdo_query_one($sql);
    return $check;
}
