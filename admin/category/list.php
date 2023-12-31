<div id="layoutSidenav_content">
    <div class="formdm">
        <form action="index.php?act=list_dm" method="post">
            <div class="container mt-3">
                <button class="add"><a href="index.php?act=add_dm" style="text-decoration: none; color: black">Thêm danh mục</a></button>
                <div class="cart"></div>
                <h2>Danh sách danh mục</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $listdm = show_cat();
                    foreach ($listdm as $list){
                        extract($list);
                        $act = "index.php?act=delete_dm&id_dm=".$id_dm;
                        $act_dm = "index.php?act=update_dm&id_dm=".$id_dm;
                        echo '
                            <tr>
                                <td>'.$id_dm.'</td>
                                <td>'.$name_dm.'</td>
                                <td>     
                                    <button><a href="'.$act_dm.'" style="text-decoration: none; color: black">Sửa</a></button>
                                    <button><a href="'.$act.'" style="text-decoration: none; color: black">Xóa</a></button>
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

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../../assets/demo/chart-area-demo.js"></script>
<script src="../../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/datatables-simple-demo.js"></script>

