<div class="fo">
    <div class="container mt-3">
        <h2>Cập nhật tài khoản</h2>
        <?php
        if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
        ?>
        <form action="?act=update_user" method="post">
            <div class="mb-3 mt-3">
                <label for="email">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="email" required value="<?=$user?>" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required value="<?=$email?>" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Mật khẩu:</label>
                <input type="password" class="form-control" required id="email" placeholder="" name="pass">
            </div>
            <div class="mb-3">
                <input type="hidden" name="id" value="<?=$id_user?>">
            </div>
            <p>
                <?php
                if(isset($errol)&&($errol!="")){
                    echo $errol;
                }
                ?>
            </p>
            <button class="btn btn-primary" type="submit" name="update">cập nhật</button>
            <button class="btn btn-primary"><a href="?act=dangnhap" style="color: white; text-decoration: none">Quay lại</a></button>
        </form>
    </div>
</div>
<style>
    .fo{
        width: 400px;
        border: 1px solid black;
        margin:20px 0 20px 800px;
        border-radius: 5px;
    }
    h2{
        margin-left: 60px;
    }
    form{
        margin: 20px 20px;
    }
</style>


