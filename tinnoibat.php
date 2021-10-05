<?php $tinnoibat = TinNoiBat() ?>
<section class="featured-posts-grid bg-dark">
    <div class="container clearfix">

        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
            <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">
                <?php $t = $tinnoibat->fetch(); ?>
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder owl-lazy" data-src="<?= $t['urlHinh'] ?>">
                        <img src="<?= $t['urlHinh'] ?>" alt="" class="d-none">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>
                        <h2 class="thumb-entry-title">
                            <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                        </h2>
                    </div>
                </article>
                <?php $t = $tinnoibat->fetch(); ?>
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder owl-lazy" data-src="<?= $t['urlHinh'] ?>">
                        <img src="<?= $t['urlHinh'] ?>" alt="" class="d-none">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>
                        <h2 class="thumb-entry-title">
                            <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                        </h2>
                    </div>
                </article>
                <?php $t = $tinnoibat->fetch(); ?>
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder owl-lazy" data-src="<?= $t['urlHinh'] ?>">
                        <img src="<?= $t['urlHinh'] ?>" alt="" class="d-none">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>
                        <h2 class="thumb-entry-title">
                            <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                        </h2>
                    </div>
                </article>



            </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->

        <?php $t = $tinnoibat->fetch(); ?>
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry featured-posts-grid__entry">
                <div class="thumb-bg-holder" style="background-image: url(<?= $t['urlHinh'] ?>);">
                    <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            <?= date('d-m-Y', strtotime($t['Ngay'])) ?>
                        </li>
                        <li class="entry__meta-comments">
                            <i class="ui-comments"></i>
                            <a href="#">115</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>

        <?php $t = $tinnoibat->fetch(); ?>
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry featured-posts-grid__entry">
                <div class="thumb-bg-holder" style="background-image: url(<?= $t['urlHinh'] ?>);">
                    <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            <?= date('d-m-Y', strtotime($t['Ngay'])) ?>
                        </li>
                        <li class="entry__meta-comments">
                            <i class="ui-comments"></i>
                            <a href="#">115</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>

    </div>
</section>