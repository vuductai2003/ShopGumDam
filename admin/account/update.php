<div id="layoutSidenav_content">
    <div class="formuser">
        <div class="container mt-3">
            <h2>Cập nhật tài khoản</h2>
            <form action="?act=update_user&id_user=<?php echo $showone['id_user'];?>" method="post">
                <input type="hidden" name="id_user" value="<?php echo $showone['id_user'];?>">
                <div class="mb-3 mt-3">
                    <label for="email">Tên khách hàng:</label>
                    <input type="text" class="form-control" id="email" required name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" required name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Địa chỉ:</label>
                    <input type="text" class="form-control" id="email" required name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Số điện thoại:</label>
                    <input type="tel" class="form-control" id="email" required name="phone">
                </div>
                <div class="mb-3">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" class="form-control" id="email" required name="pass">
                </div>
                <button class="btn btn-primary"><a href="?act=list_user" style="text-decoration: none; color: white">Danh sách</a></button>
                <input type="submit" class="btn btn-primary" name="update_user" value="Cập nhật">
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
