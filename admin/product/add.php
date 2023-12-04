<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="formuser">
                <div class="container mt-3">
                    <h2>Thêm sản phẩm</h2>
                    <form action="index.php?act=add_sp" method="post" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                            <label for="email">Tên sản phẩm:</label>
                            <input type="text" class="form-control" id="email" placeholder="" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Giá:</label>
                            <input type="tel" class="form-control" id="email" placeholder="" name="price">
                        </div>

                            <label for="email">Danh mục:</label>
                            <select name="dm" >
                                <option value="">Danh mục</option>
                                <?php
                                $get = show_cat();
                                foreach ($get as $dm){
                                    extract($dm);
                                    echo '<option value="'.$id_dm.'">'.$name_dm.'</option>';
                                }
                                ?>
                            </select> <br>

                        <div class="mb-3 mt-3">
                            <label for="email">Ảnh:</label>
                            <input type="file" class="form-control" id="email" placeholder="" name="img">
                        </div>
                        <div class="tex">
                            <div class="mb-3">
                                <label for="pwd">Mô tả:</label>
                                <textarea name="desc" cols="50" rows="10" style="resize: none"></textarea> <br><br>
                            </div>
                        </div>
                        <button class="btn btn-primary"><a href="?act=list_sp" style="text-decoration: none; color: white">Sản phẩm</a></button>
                        <input type="submit" class="btn btn-primary" name="add_sp" value="Thêm sản phẩm">
                    </form>
                </div>
            </div>
        </div>
    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../../assets/demo/chart-area-demo.js"></script>
<script src="../../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/datatables-simple-demo.js"></script>


