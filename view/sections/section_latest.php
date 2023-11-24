<?php if(!empty($allCars)): ?>
<!-- Latest cars -->
<div class="car-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">

                    <h2 class="site-title">Mavjud <span>mashinalar</span>
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($allCars as $car): ?>

                <?php
                    $carImage = getImage('car',$car['id'],$car['image']);
                ?>

                <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="car-img">
                        
                        <span class="car-status status-<?= $car['used'] == 1 ? 1 : 2 ?>"><?= $car['used'] == 1 ? 'Ishlatilgan' : 'Yangi'; ?></span>
                        <img src="<?=$carImage;?>" alt="">
                        <div class="car-btns">
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#">
                                <i class="far fa-arrows-repeat"></i>
                            </a>
                        </div>
                    </div>
                    <div class="car-content">
                        <div class="car-top">
                            <h4>
                                <a href="#"><?= $car['name']; ?></a>
                            </h4>

                        </div>
                        <ul class="car-list">
                            <li>
                                <i class="far fa-steering-wheel"></i><?= $car['karobka']; ?>
                            </li>
                            <li>
                                <i class="far fa-road"></i><?= $car['benzin'];?>
                            </li>
                            <li>
                                <i class="far fa-car"></i><?= $car['year']; ?>
                            </li>
                            <li>
                                <i class="far fa-gas-pump"></i><?= $car['mator']; ?>
                            </li>
                        </ul>
                        <div class="car-footer">
                            <span class="car-price"><?= $car['new_price']; ?>$</span>
                            <a href="?route=car-view&id=<?= $car['id'];?>" class="theme-btn">
                                <span class="far fa-eye">
                                </span>Batafsil </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>
        <div class="text-center mt-4">
            <a href="#" class="theme-btn">Load More <i class="far fa-arrow-rotate-right"></i>
            </a>
        </div>
    </div>
</div>

<?php endif;?>