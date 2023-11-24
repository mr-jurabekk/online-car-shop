<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from live.themewild.com/motex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 12:51:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Motex - Car Dealer And Automotive HTML5 Template</title>
    <link rel="icon" type="image/x-icon" href="<?= ASSETS?>/img/logo/favicon.png">
    <link rel="stylesheet" href="<?= ASSETS?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/flex-slider.min.css">
    <link rel="stylesheet" href="<?= ASSETS?>/css/style.css">
</head>
<body>

<div class="preloader">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="https://live.themewild.com/cdn-cgi/l/email-protection#1d74737b725d78657c706d7178337e7270">
                                    <i class="far fa-envelopes"></i>
                                    <span class="__cf_email__" data-cfemail="b9d0d7dfd6f9dcc1d8d4c9d5dc97dad6d4"><?=getSettings('email')?></span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?= getSettings('phone') ?>">
                                    <i class="far fa-phone-volume"></i> <?= getSettings('phone') ?> </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-alarm-clock"></i> <?= getSettings('reglament') ?> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-link">
                        <a href="#">
                            <i class="far fa-arrow-right-to-arc"></i> Login </a>
                        <a href="#">
                            <i class="far fa-user-vneck"></i> Register </a>
                    </div>
                    <div class="header-top-social">
                        <span>Follow Us: </span>

                        <?php if(!empty($allSocialLinks)): ?>
                            <?php foreach ($allSocialLinks as $allSocialLink): ?>
                                <a href="<?= $allSocialLink['link'] ?>">
                                    <i class="<?=$allSocialLink['icon_class'];?>"></i>
                                </a>
                            <?php endforeach ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.php">
                    <img src="https://us.123rf.com/450wm/themoderncanvas/themoderncanvas1902/themoderncanvas190200010/118845994-exotic-car-dealership-supercar-design-with-concept-sports-vehicle-icon-silhouette-on-white.jpg?ver=6" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-mobile-icon">
                  <i class="far fa-bars"></i>
                </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">




                        <?php if(!empty($allMenus)): ?>
                            <?php foreach ($allMenus as $menu): ?>
                                <?php if(empty($menu['children'])): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=$menu['link']?>">
                                            <?=$menu['title'];?>
                                        </a>
                                    </li>
                                <?php else: ?>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?= $menu['title'];?></a>
                                        <ul class="dropdown-menu fade-down">
                                            <?php foreach ($menu['children'] as $child): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                <?php endif ?>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </ul>
                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link">
                                <i class="far fa-search"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="search-area">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type Keyword...">
                            <button type="submit" class="search-icon-btn">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>