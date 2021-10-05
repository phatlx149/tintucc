<?php $listthanhvien = layDanhSachThanhVien(); ?>
<link href=https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css rel="stylesheet" />
<h4 class="col-10 m-auto p-2 text-center">THÀNH VIÊN</h4>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($listthanhvien as $member) { ?>
        <tr>
            <td> <?= $member['idUser'] ?> </td>
            <td> <?= $member['username'] ?> </td>
            <td> <?= $member['pass'] ?> </td>
            <td> <?= $member['email'] ?> </td>
            <td style="text-align: center;">
                <a class="btn btn-primary" href="indexadmin.php?page=thanhvien_sua&idUser=<?= $member['idUser'] ?>">Sửa</a>
                <a class="btn btn-danger" onclick="return confirm('Có chắc chưa?')" href="indexadmin.php?page=thanhvien_xoa&idUser=<?= $member['idUser'] ?>">Xoá</a>
            </td>
        </tr>
    <?php } ?>
</table>