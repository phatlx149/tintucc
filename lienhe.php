<?php require_once 'ketnoidata.php' ?>
<form action="" method="post">
    <h2 class="lienhe" style="text-align: center;">Liên hệ với chúng tôi</h2>
    <?php
    if (isset($_POST['btn-lienhe'])) {
        if (empty($_POST['ten']) || empty($_POST['sdt'])) {
            echo "<span style='font-family:Roboto, sans-serif; color:red'>Không được để trống</span>";
        } else {
            $ten = $_POST['ten'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $sql = "SELECT * FROM lienhe";
            $kq = $conn->query($sql);
            if ($kq) {
                $sql1 = "INSERT INTO lienhe(ten, sdt, email) VALUES (N'$ten', N'$sdt', N'$email')";
                $ketnoi = $conn->query($sql1);
                if ($ketnoi) {
                    echo "<script>alert('Cảm ơn bạn đã liên hệ với chúng tôi')</script>";
                }
                else {
                    echo "<script>alert('Bạn chưa hoàn tất liên hệ')</script>";
            }
            }
            else{
                echo "<script>alert('Tạm thời không thể liên hệ với chúng tôi')</script>";
            }
        }
    }
    ?>
    <div class="form-group">
        <input type="text" name="ten" placeholder="Họ và tên">
    </div>
    <div class="form-group">
        <input type="tel" name="sdt" placeholder="Số điện thoại">
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Youremail@domain.com">
    </div>
    <div class="button-submit">
        <button name="btn-lienhe" type="submit">Gửi</button>
    </div>
</form>