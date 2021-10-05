<?php
session_start();
$page = trim(strip_tags($_GET['page']));
require_once "function.php";
?>
<?php
if (isset($_SESSION['login_id']) == false) {
    $_SESSION['thongbao'] = "Bạn chưa đăng nhập";
    header("location:login.php");
    exit();
}
if ($_SESSION['login_group'] != 1) {
    $_SESSION['thongbao'] = "Bạn không phải là admin";
    header("location:loginadmin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/logo-tilte.ico">
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <head>
        <style>
            .row {
                height: 90px;
            }

            .noidung>aside,
            div.noidung>main {
                min-height: 500px
            }

            .row {
                padding-top: 20px;
            }

            .row p {
                font-size: 2rem;
            }

            .row .badge {
                font-style: italic;
            }

            .row .dangxuat {
                font-size: 1.2rem;
                margin-left: auto;
                color: #333;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <header class="row bg-info">
                <?php
                if (isset($_GET['logout'])) {
                    unset($_SESSION['login_id']);
                    unset($_SESSION['login_user']);
                    unset($_SESSION['login_group']);
                    echo '<script>alert("Bạn đã đăng xuất"); window.location="./login.php";</script>';
                }
                ?>
                <?php echo "<p> Xin chào " . "<span  class='badge badge-secondary' style='text-transform:uppercase; color:red'  >" . $_SESSION['login_user'] . "</span>" . "</p>" ?>
                <br><a class="dangxuat" href="?logout=dangxuat">Đăng xuất</a>
            </header>
            <div class="row noidung">
                <aside class="col-2 bg-dark text-white">
                    <ul class="list-group mx-n3 ">
                        <li class="list-group-item"><a href="indexadmin.php?page=theloai_them">Thêm thể loại</a></li>
                        <li class="list-group-item"><a href="indexadmin.php?page=theloai_ds">Danh sách thể loại</a></li>
                        <li class="list-group-item"><a href="indexadmin.php?page=loaitin_them">Thêm loại tin</a></li>
                        <li class="list-group-item"><a href="indexadmin.php?page=loaitin_ds">Danh sách loại tin</a></li>
                        <li class="list-group-item"><a href="indexadmin.php?page=thanhvien_ds">Thành viên đăng ký</a></li>

                    </ul>

                </aside>
                <main class="col-10 border">
                    <!-- Nội dung chính -->
                    <?php
                    switch ($page) {
                        case "theloai_ds":
                            require_once 'theloai_ds.php';
                            break;
                        case "theloai_them":
                            require_once 'theloai_them.php';
                            break;
                        case "theloai_sua":
                            require_once 'theloai_sua.php';
                            break;
                        case "theloai_xoa":
                            require_once 'theloai_xoa.php';
                            break;
                        case "loaitin_ds":
                            require_once 'loaitin_ds.php';
                            break;
                        case "loaitin_them":
                            require_once 'loaitin_them.php';
                            break;
                        case "loaitin_sua":
                            require_once 'loaitin_sua.php';
                            break;
                        case "loaitin_xoa":
                            require_once 'loaitin_xoa.php';
                            break;
                        case "thanhvien_ds":
                            require_once 'thanhvien_ds.php';
                            break;
                        case "thanhvien_sua":
                            require_once 'thanhvien_sua.php';
                            break;
                        case "thanhvien_xoa":
                            require_once 'thanhvien_xoa.php';
                            break;
                    }
                    ?>



                </main>
            </div>
        </div>

    </body>

</html>