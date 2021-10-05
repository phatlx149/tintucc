<?php
require_once 'ketnoidata.php';
if ($_POST['user'] != "" && $_POST['pass'] != "" && $_POST['repass '] != "" && $_POST['email '] != "" && isset($_POST['btn-dangky'])) {
    // Xử lí code khi người dùng nhập đầy đủ info và ấn đăng ký
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    if ($pass != $repass) {
        echo '<script>alert("Bạn xác nhận sai mật khẩu"); window.location="index.php?page=dangky";</script>';
    }
    $email = $_POST['email'];
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM thanhvien WHERE username = '$user' OR email = '$email'";
    $kq = $conn->query($sql);
    if (mysqli_num_rows($kq)>0){
        return $kq
    }
} else {

    // echo "<script>alert('Bạn chưa nhập đầy đủ thông tin')</script>";
    // header("location: index.php?page=dangky");
    // header("location: index.php?page=dangky");
    echo '<script>alert("Bạn chưa nhập đầy đủ thông tin"); window.location="index.php?page=dangky";</script>';
}
