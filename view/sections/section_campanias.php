<!-- Campanias brands -->
<div class="car-brand py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">
                  <i class="flaticon-drive"></i> Mashhur Brendlar </span>
                    <h2 class="site-title">eng sifatli  <span>brendlar</span>
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($allCarBrands)):?>

                <?php foreach ($allCarBrands as $allCarBrand): ?>

                    <?php
                    $carImage = getImage('car_brands',$allCarBrand['id'],$allCarBrand['image']);
                    ?>
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="#" class="brand-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="brand-img">
                                <img src="<?=$carImage?>" alt="">
                            </div>
                            <h5><?= $allCarBrand['title']; ?></h5>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</div>
