<?php

require_once 'function.php';
$idUser = $_GET['idUser'];
settype($idUser, "int");
xoaThanhVien($idUser);
header("location:indexadmin.php?page=thanhvien_ds");//chuyển về trang danh sách record
