<div id="layoutSidenav_content">
    <div class="formuser">
        <div class="container mt-3">
            <h2>Đăng kí tài khoản</h2>
            <form action="?act=add_user" method="post">
                <div class="mb-3 mt-3">
                    <label for="email">Tên khách hàng:</label>
                    <input type="text" class="form-control" id="email" placeholder="" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Địa chỉ:</label>
                    <input type="text" class="form-control" id="email" placeholder="" name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Số điện thoại:</label>
                    <input type="tel" class="form-control" id="email" placeholder="" name="phone">
                </div>
                <div class="mb-3">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="" name="pass">
                </div>
                <button class="btn btn-primary"><a href="?act=list_user" style="text-decoration: none; color: white">Danh sách</a></button>
                <input type="submit" class="btn btn-primary" name="add_user" value="Đăng kí">
            </form>
        </div>
    </div>
</div>
