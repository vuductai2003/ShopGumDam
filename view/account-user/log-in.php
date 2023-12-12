
<?php
if (isset($_SESSION['user'])){
    extract($_SESSION['user']);
    ?>
        <div class="fo">
            <div class="container mt-3">
                <form >
                    <div class="form-group">
                        <label for="email">Tên người dùng: <?= $user?></label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <?= $email?></label>
                    </div>
                    <div class="form-group">
                        <a href="?act=lichsu&id_user=<?= $id_user?>" style="color: black; text-decoration: none">Lịch sử mua hàng</a>
                    </div>
                    <?php
                    if ($role == 1){
                        ?>
                        <div class="form-group">
                            <a href="../admin/giaodien/index.php" style="color: black; text-decoration: none">Đăng nhập admin</a>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <a href="?act=reset_mk" style="color: black; text-decoration: none">Quên mật khẩu</a>
                    </div>
                    <div class="form-group">
                        <a href="?act=update_user" style="color: black; text-decoration: none">Cập nhật tài khoản</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login"><a href="?act=exit" style="color: white; text-decoration: none">Đăng xuất</a></button>
                    </div>
                </form>
            </div>
        </div>

<?php
} else{
    ?>
        <div class="fo">
            <div class="container mt-3">
                <h2>Đăng nhập</h2>
                <form action="?act=dangnhap" method="post">
                    <div class="form-group">
                        <label for="email">Tên đăng nhập: </label>
                        <input type="text" class="form-control" id="email" required name="user">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" required name="pass">
                    </div>
                    <label for="">
                        <p style="color: red">
                            <?php
                            if(isset($errol)&&($errol!="")){
                                echo $errol;
                            }
                            ?>
                        </p>

                    </label> <br>
                    <a href="?act=reset_mk">Quên mật khẩu?</a> <br>
                    <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
                    <button class="btn btn-primary" name="dangky"><a href="?act=dangky" style="color: white; text-decoration: none">Đăng ký</a></button>
                </form>
            </div>
        </div>

<?php
}
?>
<style>
    .fo{
        width: 400px;
        border: 1px solid black;
        margin:20px 0 120px 800px;
        border-radius: 5px;
    }
    h2{
        margin-left: 100px;
    }
    form{
        margin: 20px 20px;
    }
</style>
