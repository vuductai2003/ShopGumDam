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
