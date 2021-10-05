<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Social Subscribers -->
    <div class="widget widget-social-subscribers">
        <ul class="widget-social-subscribers__list">
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                    <i class="ui-facebook widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Fans</span>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--twitter">
                    <i class="ui-twitter widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Followers</span>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--google">
                    <i class="ui-google widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Followers</span>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--rss">
                    <i class="ui-rss widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                    <i class="ui-youtube widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                    <i class="ui-instagram widget-social-subscribers__icon"></i>
                    <span class="widget-social-subscribers__number">15369</span>
                    <span class="widget-social-subscribers__text">Followers</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Widget Newsletter -->
    <div class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Subscribe for news</h4>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <p>
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                </p>
                <p>
                    <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                </p>
            </div>
        </form>
    </div> <!-- end widget newsletter -->

    <!-- Widget Popular/Latest Posts -->
    <div class="widget widget-tabpost">
        <div class="tabs widget-tabpost__tabs">
            <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                    <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Trending</a>
                </li>
                <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Latest</a>
                </li>
                <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Comments</a>
                </li>
            </ul> <!-- end tabs -->

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

                <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                    <ul class="post-list-small">
                        <?php $cotphaitinnoibat = CotPhaiTinNoiBat() ?>
                        <?php foreach ($cotphaitinnoibat as $tincotphai) { ?>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-75">
                                            <a href="index.php?page=tin&idTin=<?= $tincotphai['idTin'] ?>">
                                                <img data-src="<?= $tincotphai['urlHinh'] ?>" src="<?= $tincotphai['urlHinh'] ?>" alt="" class=" lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="index.php?page=tin&idTin=<?= $tincotphai['idTin'] ?>"><?= $tincotphai['TieuDe'] ?></a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                <em> <?= date('d-m-Y', strtotime($tincotphai['Ngay'])) ?></em>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <!-- <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">How Meditation Can Transform Your Business</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li> -->
                        <?php } ?>
                    </ul>
                </div>

                <div class="tabs__content-pane" id="tab-latest">
                    <ul class="post-list-small">
                        <?php $cotphaitinmoinhat = CotPhaiTinMoiNhat() ?>
                        <?php foreach ($cotphaitinmoinhat as $tincotphai1) { ?>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-75">
                                            <a href="index.php?page=tin&idTin=<?= $tincotphai1['idTin'] ?>">
                                                <img data-src="<?= $tincotphai1['urlHinh'] ?>" src="<?= $tincotphai1['urlHinh'] ?>" alt="" class=" lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="index.php?page=tin&idTin=<?= $tincotphai1['idTin'] ?>"><?= $tincotphai1['TieuDe'] ?></a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                <?= date('d-m-Y', strtotime($tincotphai1['Ngay'])) ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        <?php } ?>
                        <!-- <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li> -->
                    </ul>
                </div>

                <div class="tabs__content-pane" id="tab-comments">
                    <ul class="post-list-small">
                        <?php $cotphaitinmoinhat1 = CotPhaiTinMoiNhat1() ?>
                        <?php foreach ($cotphaitinmoinhat1 as $tinmoinhat) { ?>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-75">
                                            <a href="index.php?page=tin&idTin=<?= $tinmoinhat['idTin'] ?>">
                                                <img data-src="<?= $tinmoinhat['urlHinh'] ?>" src="<?= $tinmoinhat['urlHinh'] ?>" alt="" class=" lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="index.php?page=tin&idTin=<?= $tinmoinhat['idTin'] ?>"><?= $tinmoinhat['TieuDe'] ?></a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                <?= date('d-m-Y', strtotime($tinmoinhat['Ngay'])) ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        <?php } ?>
                        <!-- <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">How Meditation Can Transform Your Business</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li> -->
                    </ul>
                </div>

            </div> <!-- end tab content -->
        </div> <!-- end tabs -->
    </div> <!-- end widget popular/latest posts -->

    <!-- Widget Ad 300 -->
    <div class="widget widget_media_image">
        <a href="#">
            <img src="img/blog/placeholder_300.jpg" alt="">
        </a>
    </div> <!-- end widget ad 300 -->

    <!-- Widget Socials -->
    <div class="widget widget-socials">
        <h4 class="widget-title">Follow us</h4>
        <div class="socials">
            <a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <!--
              --><a class="social social-twitter social--large" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <!--
              --><a class="social social-google-plus social--large" href="#" title="google" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <!--
              --><a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
            <!--
              --><a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <!--
              --><a class="social social-rss social--large" href="#" title="rss" target="_blank" aria-label="rss">
                <i class="ui-rss"></i>
            </a>
        </div>
    </div> <!-- end widget socials -->

    <!-- Widget Twitter -->
    <div class="widget">
        <h4 class="widget-title">Our tweets</h4>
        <div class="tweets-container">
            <div id="tweets"></div>
        </div>
    </div>

    <!-- Widget Ad 125 -->
    <div class="widget widget-gallery-sm">
        <ul class="widget-gallery-sm__list">
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/banner (1).png" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/banner (2).png" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/banner (3).png" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/banner (4).png" alt=""></a>
            </li>
        </ul>
    </div> <!-- end widget ad 300 -->

    <!-- Widget Carousel -->


    <!-- Latest Reviews -->
    <div class="widget widget-reviews">
        <h4 class="widget-title">Latest Reviews</h4>
        <ul class="post-list-small">
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                                <img data-src="img/blog/review_post_1.jpg" src="img/blog/review_post_1.jpg" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">My First Impressions of iPhone X</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-rating">
                                <i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star-outline"></i>
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                                <img data-src="img/blog/review_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">The Best Laptops for Kids</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-rating">
                                <i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star-outline"></i>
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                                <img data-src="img/blog/review_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">PS4 Joypads Pre-Orders Start Friday in NYC</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-rating">
                                <i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star-outline"></i>
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                                <img data-src="img/blog/review_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Hands on: Parrot AR Drone 2.0 review</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-rating">
                                <i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star"></i>
                                <!--
                        --><i class="ui-star-outline"></i>
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
        </ul>
    </div>

    <!-- Widget Tags -->
    <div class="widget widget_tag_cloud">
        <h4 class="widget-title">Tags</h4>
        <div class="tagcloud">
            <a href="#">Magazine</a>
            <a href="#">Creative</a>
            <a href="#">Responsive</a>
            <a href="#">Modern</a>
            <a href="#">Tech</a>
            <a href="#">WordPress</a>
            <a href="#">Website</a>
            <a href="#">News</a>
        </div>
    </div>

</aside>