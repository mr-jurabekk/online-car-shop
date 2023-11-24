<?php require_once 'sections/header.php';?>


<main class="main">

    <?php
        $carImage = getImage('car',$carData['id'],$carData['image']);
    ?>

    <div class="site-breadcrumb" style="background: url(<?=$carImage?>")>
        <div class="container">
            <h2 class="breadcrumb-title"><?=$carData['name'];?></h2>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="<?=FRONTEND?>">Asosiy</a>
                </li>
                <li>
                    <a href="?route=car_category&id=<?=$categoryData['id']?>"><?= $categoryData['title'] ?></a>
                </li>
                <li class="active"><?=$carData['name'];?></li>
            </ul>
        </div>
    </div>
    <div class="shop-item-single bg py-120">
        <div class="container">
            <div class="row">

                <?php if(!empty($_SESSION['alert']['success'])) : ?>

                    <div class="alert alert-success">
                        <?=$_SESSION['alert']['success']?>
                        <?php $_SESSION['alert']['seen_status'] = 1; ?>
                    </div>
                <?php endif; ?>

                <div class="col-lg-5">

                    <img src="<?=$carImage?>" alt="">

                </div>
                <div class="col-lg-6">
                    <div class="single-item-info">
                        <h4 class="single-item-title"><?=$carData['name'];?></h4>

                        <div class="single-item-price">
                            <h4>
                                <del>$<?=$carData['old_price'];?></del>
                                <span>$<?=$carData['new_price'];?></span>
                            </h4>
                        </div>
                        <p class="mb-4"><?=$carData['mini_description'];?></p>

                        <form method="get">
                            <input type="hidden" name="route" value="order-form">
                            <input type="hidden" name="car_id" value="<?=$carData['id']?>">
                            <div class="single-item-action">
                                <h5 class="title">Miqdori:</h5>
                                <div class="cart-qty">
                                    <button type="button" class="minus-btn bg-white">
                                        <i class="fal fa-minus"></i>
                                    </button>
                                    <input class="quantity bg-white" type="text" value="1" name="qty">
                                    <button class="plus-btn bg-white" type="button">
                                        <i class="fal fa-plus"></i>
                                    </button>
                                </div>
                                <div class="item-single-btn-area">
                                    <button class="theme-btn">
                                        <span class="far fa-shopping-cart"></span>Buyurtma berish</button>
                                    <a href="#" class="single-item-btn">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="#" class="single-item-btn">
                                        <i class="far fa-exchange-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <div class="single-item-content">
                            <h5>Category: <span>Car Parts</span>
                            </h5>
                        </div>
                        <hr>
                        <div class="single-item-share">
                            <span>Share:</span>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item-details">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Description</button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-tab1">
                        <div class="single-item-desc">
                            <?=$carData['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-item">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="site-heading">
                            <h2 class="site-title">Related Items</h2>
                        </div>
                    </div>
                </div>
                <div class="shop-item-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-img">
                                    <span class="shop-item-sale">Sale</span>
                                    <img src="<?= ASSETS?>/img/shop/01.jpg" alt="">
                                    <div class="shop-item-meta">
                                        <a href="#">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-item-info">
                                    <div class="shop-item-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="#">
                                        <h4 class="shop-item-title">Car Engine Parts</h4>
                                    </a>
                                    <div class="shop-item-price">
                                        <del>$560</del> $510
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-img">
                                    <img src="<?= ASSETS?>/img/shop/03.jpg" alt="">
                                    <div class="shop-item-meta">
                                        <a href="#">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-item-info">
                                    <div class="shop-item-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="#">
                                        <h4 class="shop-item-title">Car Engine Parts</h4>
                                    </a>
                                    <div class="shop-item-price">$680</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-img">
                                    <img src="<?= ASSETS?>/img/shop/04.jpg" alt="">
                                    <div class="shop-item-meta">
                                        <a href="#">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-item-info">
                                    <div class="shop-item-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="#">
                                        <h4 class="shop-item-title">Car Engine Parts</h4>
                                    </a>
                                    <div class="shop-item-price">$710</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-img">
                                    <span class="shop-item-sale">Sale</span>
                                    <img src="<?= ASSETS?>/img/shop/02.jpg" alt="">
                                    <div class="shop-item-meta">
                                        <a href="#">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-item-info">
                                    <div class="shop-item-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="#">
                                        <h4 class="shop-item-title">Car Engine Parts</h4>
                                    </a>
                                    <div class="shop-item-price">
                                        <del>$920</del> $900
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php require_once 'sections/footer.php'; ?>