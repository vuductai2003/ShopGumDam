<?php
?>
<div id="layoutSidenav_content">
    <div class="formcat">
        <h3>Sửa danh mục</h3>
        <div class="cart"></div>
        <form action="?act=update_dm&id_dm=<?php echo $listone['id_dm'];?>" method="post">
            <input type="hidden" name="id_dm" value="<?php echo $listone['id_dm'];?>">
            <b>Tên danh mục:</b> <br>
            <label>
                <input type="text" name="name" placeholder="Nhập tên danh mục" value="">
            </label>
            <input type="submit" value="Sửa danh mục" name="update_dm">
        </form>
    </div>
</div>

