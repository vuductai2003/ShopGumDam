<div id="layoutSidenav_content">
    <div class="formBuy">
        <form action="?act=listBuy" method="post">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Ghi chú</th>
                    <th>Ngày mua</th>
<!--                    <th>Thao tác</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                $showBuy = showbill();
                foreach ($showBuy as $bill){
                    extract($bill);
                    $ac = "?act=deleleBuy&id_tt=".$id_tt;
                    echo '
                    <tr>
                        <td>'.$id_tt.'</td>
                        <td>'.$user.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$name.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.number_format($price).'đ</td>
                        <td>'.$desc_tt.'</td>
                        <td>'.$ngaymua.'</td>
                        <!--<td>
                            <button><a href="" style="text-decoration: none; color: black">Xóa</a></button>
                        </td>-->
                    </tr>
                    ';
                }

                ?>

                </tbody>
            </table>
        </form>
    </div>
</div>
