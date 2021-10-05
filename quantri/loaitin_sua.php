<?php
$idLT = $_GET['idLT'];
settype($idLT, "int");
$loaitin = layChiTietLoaiTin($idLT);
?>
<?php
if (isset($_POST['btn'])) {
    $ten = $_POST['ten'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];
    $idTL = $_POST['idTL'];

    $ten = trim(strip_tags($ten));
    settype($thuTu, "int");
    settype($anHien, "int");
    settype($idTL, "int");
    $lang = trim(strip_tags($lang));

    $kq = capnhatLoaiTin($idLT, $ten, $thuTu, $anHien, $lang, $idTL);
    if ($kq) {
        header("location: indexadmin.php?page=loaitin_ds");
        exit();
    }
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<h4 class="col-10 m-auto p-2 text-center">SỮA LOẠI TIN</h4>
<form action="" method="post" class="border border-primary col-10 m-auto p-2">
    <div class="form-group">
        <label>Tên loại tin</label> <input value="<?= $loaitin['Ten'] ?>" name="ten" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label>Thứ tự</label> <input value="<?= $loaitin['ThuTu'] ?>" name="thuTu" type="number" class="form-control" />
    </div>
    <div class="form-group">
        <label>Ẩn hiện: </label>
        <input name="anHien" <?php if ($loaitin['AnHien'] == 0) echo 'checked' ?> type="radio" value="0" /> Ẩn
        <input name="anHien" <?php if ($loaitin['AnHien'] == 1) echo 'checked' ?> type="radio" value="1" checked /> Hiện
    </div>
    <div class="form-group">
        <label>Ngôn ngữ: </label>
        <input name="lang" type="radio" <?php if ($loaitin['lang'] == "vi") echo 'checked' ?> value="vi" checked /> Tiếng việt
        <input name="lang" type="radio" <?php if ($loaitin['lang'] == "en") echo 'checked' ?> value="en" /> English
    </div>
    <div class="form-group">
        <label>Thể loại: </label>
        <?php $listTheLoai = layDanhSachTheLoai(); ?>
        <select name="idTL" class="form-control">
            <option value="0">Chọn thể loại</option>
            <?php foreach ($listTheLoai as $r) { ?>
                <option value="<?= $r['idTL']; ?>" <?php if ($r['idTL'] == $loaitin['idTL']) echo 'selected' ?>> <?= $r['TenTL']; ?></option>

            <?php } ?>

        </select>
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Lưu thông tin" class="btn btn-primary" />
    </div>
</form>