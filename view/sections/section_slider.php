<?php if(!empty($allSlider)) : ?>

<!-- Main slider -->
<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">

        <?php foreach ($allSlider as $slide): ?>

            <?php
                $bgImage = getImage('slider',$slide['id'],$slide['slider_bg']);
                $carImage = getImage('slider',$slide['id'],$slide['car_image']);
            ?>

            <div class="hero-single" style="background: url(<?=$bgImage?>)">
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s"><?= $slide['subtitle']; ?></h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s"> <?= $slide['title'] ?> </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s"> <?= $slide['description']; ?> </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="<?= $slide['btn_link_1'] ?>" class="theme-btn"><?= $slide['btn_text_1'] ?><i class="fas fa-arrow-right-long"></i>
                                </a>
                                <a href="<?= $slide['btn_link_2'] ?>" class="theme-btn theme-btn2"><?= $slide['btn_text_2'] ?><i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-right">
                            <div class="hero-img">
                                <img src="<?=$carImage?>" alt="" data-animation="fadeInRight" data-delay=".25s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    </div>
</div>

<?php endif; ?>