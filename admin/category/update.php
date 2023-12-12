<?php
?>
<div id="layoutSidenav_content">
    <div class="formuser">
        <div class="container mt-3">
            <h2>Sửa danh mục</h2>
            <form action="?act=update_dm&id_dm=<?php echo $listone['id_dm'];?>" method="post">
                <input type="hidden" name="id_dm" value="<?php echo $listone['id_dm'];?>">
                <div class="mb-3 mt-3">
                    <label for="email">Tên danh mục:</label>
                    <input type="text" class="form-control " id="email" required name="name" >
                </div>
                <button class="btn btn-primary"><a href="?act=list_dm" style="text-decoration: none; color: white">Danh mục</a></button>
                <input type="submit" class="btn btn-primary" name="update_dm" value="Sửa danh mục">
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../../assets/demo/chart-area-demo.js"></script>
<script src="../../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../javascript/datatables-simple-demo.js"></script>
