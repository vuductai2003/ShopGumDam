<div id="layoutSidenav_content">
    <div class="formuser">
        <div class="container mt-3">
            <h2>Thêm danh mục</h2>
            <form action="index.php?act=add_dm" method="post">
                <div class="mb-3 mt-3">
                    <label for="email">Tên danh mục:</label>
                    <input type="text" class="form-control " id="email" placeholder="" name="name">
                </div>
                <button class="btn btn-primary"><a href="?act=list_dm" style="text-decoration: none; color: white">Danh mục</a></button>
                <input type="submit" class="btn btn-primary" name="add_dm" value="Thêm">
            </form>
        </div>
    </div>
</div>
