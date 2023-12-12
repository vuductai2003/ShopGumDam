
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div id="layoutSidenav_content">
    <div class="formshows">
        <form action="?act=list_sp" method="post">
            <div class="container mt-3">
                <button class="add">
                    <a href="?act=add_sp" style="text-decoration: none; color: black">Thêm sản phẩm</a>
                </button>
                <div class="cart"></div>
                <h2>Danh sách sản phẩm</h2>
                <table class="table table-bordered" >
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Danh mục</th>
                        <th>Mô tả</th>
                        <th style="width: 200px;">Thao tác</th>
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
                                            <td>'.number_format($price).'đ</td>
                                            <td>'.$img.'</td>
                                            <td>'.$name_dm.'</td>
                                            <td >'.mb_substr($mota,0,100,'UTF-8').'...</td>
                                            <td style="width: 200px;">
                                                <button>
                                                    <a href="'.$updsp.'"style="text-decoration: none; color: black">Sửa</i></a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../../assets/demo/chart-area-demo.js"></script>
<script src="../../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/datatables-simple-demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>