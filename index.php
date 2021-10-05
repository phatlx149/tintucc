<?php
$page = '';
if (isset($_GET['page'])) $page = $_GET['page'];
require_once 'ketnoidata.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Báo Thanh Niên</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/logo-tilte.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload -->
  <script src="js/lazysizes.min.js"></script>
  <style>
    html {
      font-family: 'Roboto', sans-serif;
    }
  </style>

</head>

<body class="bg-light">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <!-- Categories -->
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">World</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Business</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Politics</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Lifestyle</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--purple">Tech</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--yellow">Fashion</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Sport</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Science</a>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Posts</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="single-post-gallery.html" class="sidenav__menu-link">Gallery Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Video Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Audio Post</a></li>
            <li><a href="single-post-quote.html" class="sidenav__menu-link">Quote Post</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-link">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
            <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-link">Categories</a></li>
            <li><a href="shortcodes.html" class="sidenav__menu-link">Shortcodes</a></li>
            <li><a href="lazyload.html" class="sidenav__menu-link">Lazyload</a></li>
            <li><a href="404.html" class="sidenav__menu-link">404</a></li>
          </ul>
        </li>

        <li>
          <a href="about.html" class="sidenav__menu-link">About</a>
        </li>

        <li>
          <a href="contact.html" class="sidenav__menu-link">Contact</a>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Advertise</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials">
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Navigation -->
    <?php require_once 'header.php' ?>
    <!-- end navigation -->

    <!-- Header -->
    <!-- end header -->

    <!-- Trending Now -->


    <!-- Featured Posts Grid -->
    <?php if ($page == "") require_once 'tinnoibat.php' ?>
    <!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">

      <!-- Content -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">
          <?php
          switch ($page) {
            case 'login':
              require_once "dangnhap.php";
              break;
            case 'dangky':
              require_once "dangky.php";
              break;
            case 'lienhe':
              require_once "lienhe.php";
              break;
            case 'gioithieu':
              require_once "gioithieu.php";
              break;
            case 'loai':
              require_once "tintrongloai.php";
              break;
            case 'tin':
              require_once "chitiettin.php";
              break;
            case 'search':
              require_once "ketquatim.php";
              break;

            default:
              require_once 'cottrai.php';
          }
          ?>

        </div>
        <!-- end posts -->

        <!-- Sidebar -->
        <?php require_once 'cotphai.php' ?>
        <!-- end sidebar -->

      </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <?php require_once 'footer.php' ?>
    <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>