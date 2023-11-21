<div id="layoutSidenav_content">
    <div class="formshows">
        <form action="?act=list_sp" method="post">
            <div class="container mt-3">
                <button class="add">
                    <a href="?act=add_sp" style="text-decoration: none; color: black">Thêm sản phẩm</a>
                </button>
                <div class="cart"></div>
                <h2>Danh sách sản phẩm</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Danh mục</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php
                                $listsp = show_product();
                                foreach ($listsp as $list){
                                    extract($list);
                                    $delsp = "index.php?act=delete_sp&id_sp=".$id_sp;
                                    $updsp = "index.php?act=update_sp&id_sp=".$id_sp;
                                    $imgpath="../../upload/".$image;
                                    if(is_file($imgpath)){
                                        $img="<img src='".$imgpath."' height='80'>";
                                    }else{
                                        $img="Không có ảnh";
                                    }
                                    echo '
                                        <tr>
                                            <td>'.$id_sp.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$img.'</td>
                                            <td>'.$name_dm.'</td>
                                            <td>'.$mota.'</td>
                                            <td>
                                                <button>
                                                    <a href="'.$updsp.'"style="text-decoration: none; color: black">Sửa</a>
                                                </button>
                                                <button>
                                                    <a href="'.$delsp.'" style="text-decoration: none; color: black">Xóa</a>
                                                </button>
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