<?php
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="formuser">
                <div class="container mt-3">
                    <h2>Sửa sản phẩm</h2>
                    <form action="index.php?act=update_sp&id_sp=<?php echo $listonesp['id_sp'];?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_sp" value="<?php  echo $listonesp['id_sp'];?>">
                        <div class="mb-3 mt-3">
                            <label for="email">Tên sản phẩm:</label>
                            <input type="text" class="form-control" id="email" placeholder="" name="name" value="<?php  echo $listonesp['name']?>">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Giá:</label>
                            <input type="tel" class="form-control" id="email" placeholder="" name="price" value="<?php  echo $listonesp['price']?>">
                        </div>
                        <div class="select">
                            <label for="email">Danh mục:</label>
                            <select name="dm" >
                                <option value="">Danh mục</option>
                                <?php
                                $getdm = show_cat();
                                foreach ($getdm as $dm){
                                    extract($dm);
                                    echo '<option value="'.$id_dm.' " >'.$name_dm.'</option>';
                                }
                                ?>
                            </select> <br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Ảnh:</label>
                            <input type="file" class="form-control" id="email" placeholder="" name="img" value="<?php  echo $listonesp['name']?>"value="<?php  echo $listonesp['image']?>">
                        </div>
                        <div class="tex">
                            <div class="mb-3">
                                <label for="pwd">Mô tả:</label>
                                <textarea name="desc" cols="30" rows="10"><?php  echo $listonesp['mota']?>"</textarea> <br><br>
                            </div>
                        </div>
                        <button class="btn btn-primary"><a href="?act=list_sp" style="text-decoration: none; color: white">Sản phẩm</a></button>
                        <input type="submit" class="btn btn-primary" name="update_sp" value="Sửa sản phẩm">
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
