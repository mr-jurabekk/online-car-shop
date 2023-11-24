<?php


?>

<?php require_once 'sections/header.php';?>


<main class="main">

    <div class="site-breadcrumb" style="background: url(<?=ASSETS?>/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">404 Error</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Asosiy</a></li>
                <li class="active">404 Error</li>
            </ul>
        </div>
    </div>


    <div class="error-area py-120">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="error-wrapper">
                    <div class="error-img">
                        <img src="<?=ASSETS?>/img/error/404.png" alt="">
                    </div>
                    <h2>Opos... Sahifa topilmadi!</h2>
                    <p>Siz izlayotgan sahifa tizimda topilmadi.</p>
                    <a href="index.php" class="theme-btn">Asosiy sahifa <i class="far fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require_once 'sections/footer.php'; ?>