<?php
$idTL = $_GET['idTL'];
settype($idTL, "int");
$theloai = layChiTietTheLoai($idTL);
?>
<?php
if (isset($_POST['btn'])) {
    $tenTL = $_POST['tenTL'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];

    $tenTL = trim(strip_tags($tenTL));
    settype($thuTu, "int");
    settype($anHien, "int");
    $lang = trim(strip_tags($lang));

    $kq = capnhatTheLoai($idTL, $tenTL, $thuTu, $anHien, $lang);
    if ($kq) {
        header("location:indexadmin.php?page=theloai_ds");
        exit();
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<h4 class="col-10 m-auto p-2 text-center">SỮA THỂ LOẠI</h4>
<form action="" method="post" class="border border-primary col-10 m-auto p-2">
    <div class="form-group">
        <label>Tên Thể Loại</label>
        <input name="tenTL" value="<?= $theloai['TenTL'] ?>" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label>Thứ tự</label>
        <input name="thuTu" <?= $theloai['ThuTu'] ?> type="number" class="form-control" />
    </div>
    <div class="form-group">
        <label>Ẩn hiện: </label>
        <input name="anHien" <?php if ($theloai['AnHien'] == 0) echo 'checked' ?> type="radio" value="0" /> Ẩn
        <input name="anHien" <?php if ($theloai['AnHien'] == 1) echo 'checked' ?> type="radio" value="1" /> Hiện
    </div>
    <div class="form-group">
        <label>Ngôn ngữ: </label>
        <input name="lang" type="radio" <?php if ($theloai['lang'] == "vi") echo 'checked' ?> value="vi" /> Tiếng việt
        <input name="lang" type="radio" <?php if ($theloai['lang'] == "en") echo 'checked' ?> value="en" /> English
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Lưu thông tin" class="btn btn-primary" />
    </div>
</form>