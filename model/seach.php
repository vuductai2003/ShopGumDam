<?php
function seach($name){
    $sql = "SELECT * FROM sanpham WHERE name LIKE '%$name%'";
   return pdo_query($sql);
}
