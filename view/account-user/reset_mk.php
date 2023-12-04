<?php
if (isset($_SESSION['user'])){
extract($_SESSION['user']);
?>
    <div class="fo">
        <div class="container mt-3">
            <h2>Quên mật khẩu</h2>
            <form action="?act=reset_mk" method="post">
                <div class="form-group">
                    <label for="email">Nhập email: </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <br>
                <p>
                    <?php
                    if(isset($errol)&&($errol!="")){
                        echo $errol;
                    }
                    ?>
                </p>
                <button type="submit" class="btn btn-primary" name="reset">Lấy mật khẩu</button>
                <button class="btn btn-primary" ><a href="?act=dangnhap" style="color: white; text-decoration: none">Quay lại</a></button>
            </form>
        </div>
    </div>
<?php
} else{
    ?>
    <div class="fo">
        <div class="container mt-3">
            <h2>Quên mật khẩu</h2>
            <form action="?act=reset_mk" method="post">
                <div class="form-group">
                    <label for="email">Nhập email: </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <br>
                <p>
                    <?php
                    if(isset($errol)&&($errol!="")){
                        echo $errol;
                    }
                    ?>
                </p>
                <button type="submit" class="btn btn-primary" name="reset">Lấy mật khẩu</button>
                <button class="btn btn-primary" ><a href="?act=dangnhap" style="color: white; text-decoration: none">Đăng nhập</a></button>
            </form>
        </div>
    </div>
   <?php
}
?>

<style>
    .fo{
        width: 300px;
        border: 1px solid black;
        margin:20px 0 20px 800px;
        border-radius: 5px;
    }
    h2{
        margin-left: 32px;
    }
    form{
        margin: 20px 20px;
    }
</style>

