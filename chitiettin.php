<?php
$idTin = 0;
if (isset($_GET['idTin'])) $idTin = $_GET['idTin'];
settype($idTin, "int");
$tin = ChiTietTin($idTin);
$tinnoibat = TinNoiBat();
?>

<!-- Breadcrumbs -->
<ul class="breadcrumbs">
    <li class="breadcrumbs__item">
        <a href="index.html" class="breadcrumbs__url"><i class="ui-home"></i></a>
    </li>
    <li class="breadcrumbs__item">
        <a href="index.html" class="breadcrumbs__url">News</a>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        World
    </li>
</ul>

<!-- standard post -->
<article class="entry">

    <div class="single-post__entry-header entry__header">
        <a href="#" class="entry__meta-category">World</a>
        <h1 class="single-post__entry-title">
            <?= $tin['TieuDe'] ?>
        </h1>

        <ul class="entry__meta">
            <li class="entry__meta-author">
                <i class="ui-author"></i>
                <a href="#">DeoThemes</a>
            </li>
            <li class="entry__meta-date">
                <i class="ui-date"></i>
                21 October, 2017
            </li>
            <li class="entry__meta-comments">
                <i class="ui-comments"></i>
                <a href="#">115</a>
            </li>
        </ul>
    </div>


    <!-- Share -->
    <!-- share -->

    <div class="entry__article">
        <?= $tin['Content'] ?>
        <!-- tags -->
        <div class="entry__tags">
            <span class="entry__tags-label">Tags:</span>
            <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
        </div> <!-- end tags -->

    </div> <!-- end entry article -->

    <!-- Newsletter -->
    <div class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Nhận tin tức trong hộp thư của bạn</h4>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <p>
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                </p>
                <p>
                    <input type="submit" class="btn btn-lg btn-color" value="Đăng ký">
                </p>
            </div>
        </form>
    </div>

    <!-- Author -->
    <div class="title-wrap mt-40">
        <h5 class="uppercase">Giới thiệu về tác giả</h5>
    </div>
    <div class="entry-author clearfix">
        <img alt="" data-src="img/blog/author_large.jpg" src="img/blog/author_large.jpg" class="avatar lazyloaded">
        <div class="entry-author__info">
            <h6 class="entry-author__name">
                <a href="#">John Carpet</a>
            </h6>
            <p class="mb-0">Nhưng không may cho hầu hết chúng ta vai trò người làm vườn của chúng ta chưa bao giờ được giải thích cho chúng ta. Và khi hiểu sai vai trò của mình, chúng ta đã để cho tất cả các loại hạt giống tốt và xấu xâm nhập vào khu vườn bên trong của chúng ta.</p>
        </div>
    </div>

    <!-- Prev / Next Post -->
    <nav class="entry-navigation">
        <div class="clearfix">
            <div class="entry-navigation--left">
                <i class="ui-arrow-left"></i>
                <span class="entry-navigation__label">Bài trước</span>
                <div class="entry-navigation__link">
                    <a href="#" rel="next">How to design your first mobile app</a>
                </div>
            </div>
            <div class="entry-navigation--right">
                <span class="entry-navigation__label">Bài tiếp theo</span>
                <i class="ui-arrow-right"></i>
                <div class="entry-navigation__link">
                    <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Related Posts -->
    <div class="related-posts">
        <div class="title-wrap mt-40">
            <h5 class="uppercase">Bài viết nổi bật</h5>
        </div>
        <div class="row row-20">
            <?php $t = $tinnoibat->fetch(); ?>
            <div class="col-md-4">

                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>">
                            <div class="thumb-container thumb-75">
                                <img data-src="<?= $t['urlHinh'] ?>" src="<?= $t['urlHinh'] ?>" class="entry__img lazyloaded" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title entry__title--sm">
                                <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>
            <?php $t = $tinnoibat->fetch(); ?>
            <div class="col-md-4">

                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>">
                            <div class="thumb-container thumb-75">
                                <img data-src="<?= $t['urlHinh'] ?>" src="<?= $t['urlHinh'] ?>" class="entry__img lazyloaded" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title entry__title--sm">
                                <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>
            <?php $t = $tinnoibat->fetch(); ?>
            <div class="col-md-4">

                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>">
                            <div class="thumb-container thumb-75">
                                <img data-src="<?= $t['urlHinh'] ?>" src="<?= $t['urlHinh'] ?>" class="entry__img lazyloaded" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <h2 class="entry__title entry__title--sm">
                                <a href="index.php?page=tin&idTin=<?= $t['idTin'] ?>"><?= $t['TieuDe'] ?></a>
                            </h2>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div> <!-- end related posts -->

</article> <!-- end standard post -->


<!-- Comments -->
<div class="entry-comments mt-30">
    <div class="title-wrap mt-40">
        <h5 class="uppercase">3 comments</h5>
    </div>
    <ul class="comment-list">
        <li class="comment">
            <div class="comment-body">
                <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_1.jpg">
                </div>
                <div class="comment-text">
                    <h6 class="comment-author">Joeby Ragpa</h6>
                    <div class="comment-metadata">
                        <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                </div>
            </div>

            <ul class="children">
                <li class="comment">
                    <div class="comment-body">
                        <div class="comment-avatar">
                            <img alt="" src="img/blog/comment_2.jpg">
                        </div>
                        <div class="comment-text">
                            <h6 class="comment-author">Alexander Samokhin</h6>
                            <div class="comment-metadata">
                                <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                            </div>
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            <a href="#" class="comment-reply">Reply</a>
                        </div>
                    </div>
                </li> <!-- end reply comment -->
            </ul>

        </li> <!-- end 1-2 comment -->

        <li>
            <div class="comment-body">
                <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_3.jpg">
                </div>
                <div class="comment-text">
                    <h6 class="comment-author">Chris Root</h6>
                    <div class="comment-metadata">
                        <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                </div>
            </div>
        </li> <!-- end 3 comment -->

    </ul>
</div> <!-- end comments -->


<!-- Comment Form -->
<div id="respond" class="comment-respond">
    <div class="title-wrap">
        <h5 class="comment-respond__title uppercase">Leave a Reply</h5>
    </div>
    <form id="form" class="comment-form" method="post" action="#">
        <p class="comment-form-comment">
            <!-- <label for="comment">Comment</label> -->
            <textarea id="comment" name="comment" rows="5" required="required" placeholder="Comment*"></textarea>
        </p>

        <div class="row row-20">
            <div class="col-lg-4">
                <input name="name" id="name" type="text" placeholder="Name*">
            </div>
            <div class="col-lg-4">
                <input name="email" id="email" type="email" placeholder="Email*">
            </div>
            <div class="col-lg-4">
                <input name="website" id="website" type="text" placeholder="Website">
            </div>
        </div>

        <p class="comment-form-submit">
            <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
        </p>

    </form>
</div> <!-- end comment form -->