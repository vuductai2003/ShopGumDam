<!--sdlfsjdf-->
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
                                <textarea name="desc" cols="30" rows="10"></textarea> <br><br>
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


