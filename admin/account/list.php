<div id="layoutSidenav_content">
    <form action="?act=list_user" method="post">
        <div class="container mt-3" >
<!--            <button class="add">-->
<!--                <a href="?act=add_user" style="text-decoration: none; color: black">Thêm tài khoản</a>-->
<!--            </button>-->
            <div class="cart"></div>
            <h2>Danh sách tài khoản</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Mã tài khoản</th>
                    <th>Tên</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $listkh = show_user();
                    foreach ($listkh as $list){
                        extract($list);
                        $del = "?act=delete_user&id_user=".$id_user;
                        $upd = "?act=update_user&id_user=".$id_user;
                        echo '
                            <tr>
                                <td>'.$id_user.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>     
                                    <button><a href="'.$upd.'" style="text-decoration: none; color: black">Sửa</a></button>
                                    <button><a href="'.$del.'" style="text-decoration: none; color: black">Xóa</a></button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../../assets/demo/chart-area-demo.js"></script>
<script src="../../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/datatables-simple-demo.js"></script>
