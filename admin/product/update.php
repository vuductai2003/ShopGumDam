<div id="layoutSidenav_content">
    <div class="formpro">
        <form action="index.php?act=update_sp&id_sp=<?php echo $listonesp['id_sp'];?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_sp" value="<?php  echo $listonesp['id_sp'];?>">
            <b>Tên sản phẩm:</b> <br>
            <input type="text" name="name"> <br><br>
            <b>Giá:</b> <br>
            <input type="text" name="price"> <br><br>
            <div class="select">
                <b>Danh mục: </b>
                <select name="id_dm" >
                    <option value="">Danh mục</option>
                    <?php
                    $getdm = show_cat();
                    foreach ($getdm as $dm){
                        extract($dm);
                        echo '<option value="'.$id_dm.'">'.$name_dm.'</option>';
                    }
                    ?>

                </select> <br><br>
            </div>
            <b>Ảnh:</b> <br>
            <input type="file" name="img"> <br><br>
            <b>Mô tả:</b> <br>
            <textarea name="desc" cols="30" rows="10"></textarea> <br><br>
            <input type="submit" value="Sửa sản phẩm" name="update_sp">
        </form>
    </div>
</div>
