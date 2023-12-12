<?php
function charCategory(){
    $sql = "SELECT name_dm, COUNT(*) AS soluong FROM sanpham JOIN danhmuc d on d.id_dm = sanpham.iddm GROUP BY iddm";
    $listChart = pdo_query($sql);
    return $listChart;
}
function chatMonth(){
    $sql = "
            SELECT MONTH(ngaymua) AS thang,
                   IFNULL(format(SUM(soluong * thanhtoan.price),'###.###.###'), 0) AS tong
            FROM thanhtoan
            GROUP BY MONTH(ngaymua)
";
    return pdo_query($sql);
}