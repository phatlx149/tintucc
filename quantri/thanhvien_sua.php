<?php
$idUser = $_GET['idUser'];
settype($idUser, "int");
$thanhvien = layChiTietThanhVien($idUser);
?>
<?php
if (isset($_POST['btn'])) {
    $username = $_POST['u'];
    $pass = $_POST['p'];
    $email = $_POST['email'];


    $username = trim(strip_tags($username));

    

    $kq = capnhatThanhVien($idUser, $username, $pass, $email);
    if ($kq) {
        header("location: indexadmin.php?page=thanhvien_ds");
        exit();
    }
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<h4 class="col-10 m-auto p-2 text-center">SỬA THÀNH VIÊN</h4>
<form action="" method="post" class="border border-primary col-10 m-auto p-2">
    <div class="form-group">
        <label>Username</label> <input value="<?= $thanhvien['username'] ?>" name="u" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label>Password</label> <input value="<?= $thanhvien['pass'] ?>" name="p" type="password" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email</label> <input value="<?= $thanhvien['email'] ?>" name="email" require type="email" class="form-control" />
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Lưu thông tin" class="btn btn-primary" />
    </div>
</form>