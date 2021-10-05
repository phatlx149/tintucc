<?php require_once 'ketnoidatalogin.php'; ?>
<div class="img"><a href="index.php"><img src="img/LOGO-BAOTHANHNIEN.png" alt=""></a></div>
<h2 class="login">Đăng ký</h2>
<?php
// nếu người dùng ấn vào đăng ký
if (isset($_POST['btn-dangky'])) {
    // và nếu user + pass này để trống thì sẽ echo thông báo lỗi
    if (empty($_POST['user']) || empty($_POST['pass']) || empty($_POST['email'])) {
        echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Không được để trống </span>";
    }
    // TH còn lại là người dùng nhập vào 
    else {
        // nhận dữ liệu từ form
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $email = $_POST['email'];
        // xử lí số kí tự người dùng nhập
        if (strlen($username) < 6 || strlen($pass) < 6) {
            echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Username và Password không thể dưới 6 kí tự </span>";
        } // TH còn lại xử lí xác nhận mật khẩu có đúng hay không
        else {
            // mk ko trùng sẽ báo lỗi
            if ($pass != $repass) {
                echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Password xác nhận không trùng khớp </span>";
            }
            // TH còn lại mình sẽ xét username người dùng nhập vào có trùng trên database hay ko?
            else {
                // Viết câu lệnh SQL điều kiện là username
                $sql = "SELECT * FROM dangky WHERE username='$username' OR email='$email'";
                // Truy vấn dữ liệu
                $kq = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($kq);
                // Nếu trong CSDL không tồn tại thì cho phép user tạo thành
                if ($check == 0) {
                    $themdulieu = "INSERT INTO dangky (username,pass,email) VALUES ('$username', '$pass','$email')";
                    $truyvan = mysqli_query($conn, $themdulieu);
                    if ($truyvan) {
                        echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:#059824; text-align:center'> Tạo tài khoản thành công </span>";
                    } else {
                        echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Tạo tài khoản không thành công </span>";
                    }
                } else {
                    echo "<span style='font-family: &quot;Roboto&quot;, sans-serif;color:red; text-align:center'> Username hoặc Email bạn nhập đã tồn tại </span>";
                }
            }
        }
    }
}
?>
<form action="" method="post">
    <div class="form-group">
        <input type="text" name="user" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="pass" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" name="repass" placeholder="Confirm password">
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Youremail@domain.com">
    </div>

    <div class="button-submit">
        <button name="btn-dangky" type="submit">Đăng ký</button>
    </div>
</form>