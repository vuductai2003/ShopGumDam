<div class="fo">
    <div class="container mt-3">
        <h2>Đăng kí tài khoản</h2>
        <form action="?act=dangky" method="post">
            <div class="mb-3 mt-3">
                <label for="email">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="email" placeholder="" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Mật khẩu:</label>
                <input type="password" class="form-control" id="email" placeholder="" name="pass">
            </div>
            <p>
                <?php
                if(isset($errol)&&($errol!="")){
                    echo $errol;
                }
                ?>
            </p>
            <button class="btn btn-primary" type="submit" name="dangky">Đăng ký</button>
            <button class="btn btn-primary"><a href="?act=dangnhap" style="text-decoration: none; color: white">Đăng nhập</a></button>
        </form>
    </div>

</div>
<style>
    .fo{
        width: 500px;
        border: 1px solid black;
        margin:20px 0 20px 700px;
        border-radius: 5px;
    }
    h2{
        margin-left: 100px;
    }
    form{
        margin: 20px 20px;
    }
</style>

