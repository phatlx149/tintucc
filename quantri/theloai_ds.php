<?php $listTheLoai = layDanhSachTheLoai(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<h4 class="col-10 m-auto p-2 text-center">DANH SÁCH THỂ LOẠI</h4>
<table class="table table-bordered">
    <tr>
        <th>Tên Thể Loại</th>
        <th>Thứ Tự</th>
        <th>Ẩn Hiện</th>
        <th>Ngôn Ngữ</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($listTheLoai as $row) { ?>
        <tr>
            <td> <?= $row['TenTL'] ?> </td>
            <td> <?= $row['ThuTu'] ?> </td>
            <td> <?= ($row['AnHien']) ? "Hiện" : "Ẩn" ?> </td>
            <td> <?= ($row['lang'] == "vi") ? "Tiếng việt" : "Tiếng Anh" ?> </td>
            <td style="text-align: center;">
                <a class="btn btn-primary" href="indexadmin.php?page=theloai_sua&idTL=<?= $row['idTL'] ?>">Sửa</a>
                <a class="btn btn-danger" onclick="return confirm('Có chắc chưa?')" href="indexadmin.php?page=theloai_xoa&idTL=<?= $row['idTL'] ?>">Xoá</a>
            </td>
        </tr>
    <?php } ?>
</table>