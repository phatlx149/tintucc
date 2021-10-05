<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Side Menu Button -->
                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                    <span class="nav-icon-toggle__box">
                        <span class="nav-icon-toggle__inner"></span>
                    </span>
                </button> <!-- end Side menu button -->

                <!-- Mobile logo -->
                <a href="index.html" class="logo logo--mobile d-lg-none">
                    <img class="logo__img" src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li class="active">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <?php $theloai = TheLoai(); ?>
                        <?php foreach ($theloai as $motTL) { ?>
                            <li class="nav__dropdown">
                                <a href="#"><?= $motTL['TenTL'] ?></a>
                                <ul class="nav__dropdown-menu">
                                    <?php $loaitin = LoaiTinTrongTheLoai($motTL['idTL']) ?>
                                    <?php foreach ($loaitin as $motLT) { ?>
                                        <li><a href="index.php?page=loai&idLT=<?= $motLT['idLT'] ?>"><?= $motLT['Ten'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="index.php?page=lienhe">Liên hệ</a>
                        </li>





                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <!-- Nav Right -->
                <div class="nav__right nav--align-right d-lg-flex">

                    <!-- Socials -->
                    <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                        <a style="margin-right: 20px" href="index.php?page=login">Đăng nhập</a>
                        <a href="index.php?page=dangky">Đăng ký</a>
                    </div>

                    <!-- Search -->
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form" method="get" action="index.php">
                                <input type="text" name="tukhoa" value="" placeholder="Tìm kiếm..." class="nav__search-input">
                                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div> <!-- end nav right -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
<div class="header">
    <div class="container">
        <div class="flex-parent align-items-center">

            <!-- Logo -->
            <a href="index.php" class="logo d-none d-lg-block">
                <img class="logo__img" src="img/LOGO-BAOTHANHNIEN.png" srcset="img/LOGO-BAOTHANHNIEN.png 1x, img/LOGO-BAOTHANHNIEN.png 1x" alt="logo">
            </a>

            <!-- Ad Banner 728 -->
            <div class="text-center">
                <a href="#">
                    <img src="img/banner.png" alt="">
                </a>
            </div>

        </div>
    </div>
</div>