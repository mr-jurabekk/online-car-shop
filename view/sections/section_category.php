<!-- Car category -->
<div class="car-category py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">
                  <i class="flaticon-drive"></i>Avtomobil Toifasi</span>
                    <h2 class="site-title">Avtomobil <span> Turlari</span> 
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($allCategoryCars)) : ?>


               <?php foreach($allCategoryCars as $categoryCar): ?>

                    <?php
                        $carImage = getImage('car_category',$categoryCar['id'],$categoryCar['image']);
                    ?>

                <div class="col-6 col-md-4 col-lg-2">
                    <a href="?route=car_category&id=<?= $categoryCar['id'];?>" class="category-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="category-img">
                            <img src="<?=$carImage?>" alt="">
                        </div>
                        <h5><?= $categoryCar['title']; ?></h5>
                    </a>
                </div>

                <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</div>