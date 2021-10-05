<?php require_once 'ketnoidatalogin.php'; ?>
<div class="img"><a href="index.php"><img src="img/LOGO-BAOTHANHNIEN.png" alt=""></a></div>
<h2 class="login">Đăng nhập</h2>
<?php
session_start();
// nếu người dùng ấn vào đăng nhập
if (isset($_POST['btn-dangnhap'])) {
    // và nếu user + pass này để trống thì sẽ echo thông báo lỗi
    if (empty($_POST['username']) || empty($_POST['pass'])) {
        echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Không được để trống </span>";
    }
    // TH còn lại là người dùng nhập vào 
    else {
        // nhận dữ liệu từ form
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        // Viết câu lệnh SQL điều kiện là username or email và password
        $sql = "SELECT * FROM dangky WHERE username='$username' AND pass='$pass'";
        // Truy vấn dữ liệu
        $kq = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($kq);
        // Nếu trong CSDL tồn tại thì cho phép user đăng nhập
        if ($check != 0) {
            // hệ thống biết mình đã đăng nhập hay chưa
            $_SESSION['username'] = $username;
            //tạo cookie sống 7 ngày
            // echo "<script>alert('Bạn đã đăng nhập thành công')</script>";
            echo '<script>alert("Bạn đã đăng nhập thành công"); window.location="index.php";</script>';
        } else {
            echo "<script>alert('Username hoặc Password chưa đúng')</script>";
        }
    }
}

?>
<div class="mxh">
    <div class="mxh1">
        <a href=""><i class="fab fa-facebook-f"></i><span class="mang-xh">Đăng nhập bằng Facebook</span></a>
    </div>
    <div class="mxh1">
        <a href=""><i class="fab fa-google"></i><span class="mang-xh">Đăng nhập bằng Google</span></a>
    </div>
    <div class="mxh1">
        <a href=""><i class="fab fa-twitter"></i><span class="mang-xh">Đăng nhập bằng Twitter</span></a>
    </div>
</div>
<form action="" method="post">

    <div class="form-group">
        <input type="text" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="pass" placeholder="Password">
    </div>
    <div class="check-box">
        <input name="remember" style="display:block" type="checkbox">
        <span class="remember">Remember me?</span>
    </div>
    <div class="button-submit">
        <button name="btn-dangnhap" type="submit">Đăng nhập</button>
    </div>
</form>