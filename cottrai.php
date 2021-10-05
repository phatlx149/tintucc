<!-- Hot News -->
<section class="section tab-post mb-10">
    <div class="title-wrap">
        <h3 class="section-title">Tin mới</h3>

        <div class="tabs tab-post__tabs">
            <ul class="tabs__list">
                <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">All</a>
                </li>

            </ul> <!-- end tabs -->
        </div>
    </div>

    <!-- tab content -->
    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

        <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
            <div class="row">
                <?php $tinmoinhat = TinMoiNhat(12) ?>
                <?php foreach ($tinmoinhat as $tin) { ?>
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="<?=$tin['urlHinh']?>" src="img/empty.png" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">science</a>
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
                                    <p><?=$tin['TomTat']?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div> <!-- end pane 1 -->

    </div> <!-- end tab content -->
</section> <!-- end hot news -->