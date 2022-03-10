
<form action="<?php echo BASE_URL?>login/login_auth" method="POST">
    <?php
        if(isset($msg))
        {
            echo   '<span>'.$msg.'</span>';
        }    
    ?>
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control"   name="username" placeholder="Nhập username">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control"   name="password" placeholder="Nhập mật khẩu">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
