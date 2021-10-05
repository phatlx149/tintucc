<?php

require_once 'function.php';
$idLT = $_GET['idLT'];
settype($idLT, "int");
xoaChiTietTL($idLT);
header("location:indexadmin.php?page=loaitin_ds");//chuyển về trang danh sách record
