<?php

require_once 'function.php';
$idTL = $_GET['idTL'];
settype($idTL, "int");
xoaTheLoai($idTL);
header("location:indexadmin.php?page=theloai_ds");//chuyển về trang danh sách record
?>