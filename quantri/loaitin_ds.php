<?php $listLoaiTin = layDanhSachLoaiTin(); ?>
<link href=https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css rel="stylesheet" />
<h4 class="col-10 m-auto p-2 text-center">DANH SÁCH LOẠI TIN</h4>
<table class="table table-bordered">
    <tr>
        <th>Tên</th>
        <th>Thứ tự</th>
        <th>Ẩn hiện</th>
        <th>lang</th>
        <th>ID Thể Loại</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($listLoaiTin as $row) { ?>
        <tr>
            <td> <?= $row['Ten'] ?> </td>
            <td> <?= $row['ThuTu'] ?> </td>
            <td> <?= ($row['AnHien']==0)? "Ẩn":"Hiện" ?> </td>
            <td> <?= ($row['lang']=="vi")? "Tiếng việt":"Tiếng Anh" ?> </td>
            <td> <?= layTenTheLoai($row['idTL']) ?> </td>
            <td style="text-align: center;">
                <a class="btn btn-primary" href="indexadmin.php?page=loaitin_sua&idLT=<?= $row['idLT'] ?>">Sửa</a>
                <a class="btn btn-danger" onclick="return confirm('Có chắc chưa?')" href="indexadmin.php?page=loaitin_xoa&idLT=<?= $row['idLT'] ?>">Xoá</a>
            </td>
        </tr>
    <?php } ?>
</table>