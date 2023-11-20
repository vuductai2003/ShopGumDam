<div id="layoutSidenav_content">
    <form action="?act=list_user" method="post">
        <div class="container mt-3" >
            <button class="add">
                <a href="?act=add_user" style="text-decoration: none; color: black">Thêm tài khoản</a>
            </button>
            <div class="cart"></div>
            <h2>Danh sách tài khoản</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Mã tài khoản</th>
                    <th>Tên</th>
                    <th>Mật khẩu</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $listkh = show_user();
                    foreach ($listkh as $list){
                        extract($list);
                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>     
                                    <button><a href="" style="text-decoration: none; color: black">Sửa</a></button>
                                    <button><a href="" style="text-decoration: none; color: black">Xóa</a></button>
                                </td>
                            </tr>
                        ';
                    }
                ?>

                </tbody>
            </table>
        </div>
    </form>

</div>