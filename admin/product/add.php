<div id="layoutSidenav_content">
    <div class="formpro">
        <form action="index.php?act=add_sp" method="post" enctype="multipart/form-data">
            <b>Tên sản phẩm:</b> <br>
            <input type="text" name="name"> <br><br>
            <b>Giá:</b> <br>
            <input type="text" name="price"> <br><br>
            <b>Danh mục: </b>
            <select name="id_dm" >
                <?php
                $listdm = show_cat();
                foreach ($listdm as $dm){
                    extract($dm);
                    ?>
                    <option value="<?php echo "$id"?>"><?php echo "$name"?></option>
                   <?php
                }
                ?>
            </select> <br><br>
            <b>Ảnh:</b> <br>
            <input type="file" name="img"> <br><br>
            <b>Mô tả:</b> <br>
            <textarea name="desc" cols="30" rows="10"></textarea> <br><br>
            <input type="submit" value="Thêm sản phẩm" name="add_sp">
        </form>
    </div>

</div>
