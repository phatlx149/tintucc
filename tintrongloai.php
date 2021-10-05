<?php
$page_size = 12;
$page_num = 1;

if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
if ($page_num <= 0) $page_num = 1;

if (isset($_GET['idLT'])) $idLT  = $_GET['idLT'];
settype($idLT, "int");

?>
<?php $tintrongloai = TinTrongLoai($idLT, $page_num, $page_size);
$tenLT = LayTenTrongLoai($idLT);
$total_rows = demTinTrongLoai($idLT); ?>

<div class="title-wrap">
    <h1><?= $tenLT ?></h1>
</div>

<div class="row">
    <?php foreach ($tintrongloai as $tin) { ?>
        <div class="col-md-6">
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>">
                        <div class="thumb-container thumb-75">
                            <img data-src="<?= $tin['urlHinh'] ?>" src="<?= $tin['urlHinh'] ?>" class="entry__img lazyloaded" alt="">
                        </div>
                    </a>
                </div>

                <div class="entry__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>"><?= $tin['TieuDe'] ?></a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                <?= date('d-m-Y', strtotime($tin['Ngay'])) ?>
                            </li>
                            <li class="entry__meta-comments">
                                <i class="ui-comments"></i>
                                <a href="#">115</a>
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">
                        <p><?= $tin['TomTat'] ?></p>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>


</div>

<!-- Pagination -->
<!-- <nav class="pagination"> -->
    <?php
    $base_url = "index.php?page=loai&idLT=$idLT";
    echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
    ?>

<!-- <span class="pagination__page pagination__page--current">1</span>
    <a href="#" class="pagination__page">2</a>
    <a href="#" class="pagination__page">3</a>
    <a href="#" class="pagination__page">4</a>
    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav> --!>