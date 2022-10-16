<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.availablecoder.xyz/tona_template/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 17:47:26 GMT -->

<head>
    <meta charset="UTF-8">
    <title><?=$settings['title']?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="author" content="Availablecoder">

    <?php if (isset($meta['description'])): ?>
        <meta name="description" content="<?= $meta['description'] ?>">
    <?php endif; ?>


    <?php if (isset($meta['keywords'])): ?>
        <meta name="keywords" content="<?= $meta['keywords'] ?>">
    <?php endif; ?>


    <script>
        var api_url = '<?=site_url('api')?>';
    </script>

    <script src="<?=public_url('js/api.js')?>"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&amp;display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" sizes="32x32" href="<?=public_url('images/lima LOGO AG PNG-01.png')?>">


    <link rel="stylesheet" href="<?=public_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/all.min.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/jquery.animatedheadline.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/animate.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/swiper.min.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/fancybox.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/odometer-theme-minimal.css') ?>">


    <link rel="stylesheet" href="<?=public_url('css/style_dark.css') ?>">
    <link rel="stylesheet" href="<?=public_url('css/responsive.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




</head>

<body>


<!--
<div class="preloader">
    <div class="load-splitter"></div>
    <div class="load-splitter"></div>
    <div class="loader">
        <p class="text">Lima Technology<span>.</span></p>
        <div class="loading-bar">
            <span></span>
        </div>
    </div>
</div>
-->


<header class="header-sliding">
    <nav class="navbar w-100 navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand logo p-0" href="index.php" style="width: 300px; height: 90px;">
                <img src="<?=public_url('images/logojpgson.jpg') ?>" style="width: 207px; height: 100%;">
            </a>
            <button class="navbar-toggler menu-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="header-nav-icon"></span>
                <span class="header-nav-icon"></span>
                <span class="header-nav-icon"></span>
            </button>
            <div class="ul-cont collapse navbar-collapse ms-0 ms-lg-auto" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right ms-0 ms-lg-auto mb-2 mb-lg-0" style="font-size: 20px">





                    <?php foreach (menu(1) as $key => $menu): ?>
                        <li class="nav-item mx-1">
                            <a class="nav-link" data-scroll="home" href="<?= menu_url($menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>






<!--
                    <li class="nav-item mx-1">
                        <a class="nav-link active" data-scroll="home" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#about" data-scroll="about">About</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#services" data-scroll="services">Services</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#resume" data-scroll="resume">Resume</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#portfolio" data-scroll="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#reviews" data-scroll="reviews">Reviews</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#blog" data-scroll="blog">Blog</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#contact" data-scroll="contact">Contact</a>
                    </li>


-->








                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner h-100">
        <div class="carousel-item active">
            <div class="overlay"></div>
            <img src="<?=public_url('images/home/1.jpg') ?>" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="<?=public_url('images/home/2.jpg') ?>" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="<?=public_url('images/home/3.jpg') ?>" class="d-block w-100 h-100" alt="...">
        </div>
        <section class="home-content d-flex align-items-center" id="home">
            <div class="container">
                <div class="home-text text-center text-md-start">
                    <p class="intro mx-auto mx-md-0">Salam !</p>
                    <div class="head-text" id="home-text-changer">
                        <h1 class="ah-headline">
                            <span class="ah-words-wrapper">
                                    <b class="is-visible"><?= $settings['welcome_title'] ?></b>
                                    <b><?= $settings['service_title_1'] ?></b>
                                    <b><?= $settings['service_title_2'] ?></b>
                                </span>
                        </h1>
                    </div>
                    <p class="name">Lima Technology - <span>Mükəmməlliyə İnvestisiya</span></p>
                    <div class="home-social d-flex justify-content-center justify-content-md-start mt-3">

                        <!-- Sosial şəbəkələr  -->
                        <?php foreach (menu(2) as $key => $menu): ?>
                            <a class="mx-2" href="<?=menu_url($menu['url'])?>">
                                <?=htmlspecialchars_decode($menu['title'])?>
                            </a>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <!--  <canvas class="particles-js-canvas-el" width="1000" height="198"
        style="/* width: 182%; */height: 100%;"></canvas> -->


    <div class=" d-flex justify-content-end align-items-end">
        <a class="scroll-top " href="# ">
            <i class="fas fa-angle-up "></i>
        </a>
    </div>
</div>
