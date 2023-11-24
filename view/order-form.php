<?php require_once 'sections/header.php';?>


<main class="main">

    <div class="site-breadcrumb" style="background: url(<?=$carImage?>)">
        <div class="container">
            <h2 class="breadcrumb-title">Buyurtma berish</h2>
            <ul class="breadcrumb-menu">
                <li><a href="<?=FRONTEND?>">Asosiy</a></li>
<!--                <li>-->
<!--                    <a href="?route=car_category&id=--><?//=$categoryData['id']?><!--">--><?//= $categoryData['title'] ?><!--</a>-->
<!--                </li>-->
                <li class="active">Buyurtma berish</li>
            </ul>
        </div>
    </div>


    <div class="calculator py-120">
        <div class="container">
            <div class="calculator-wrapper">
                <h4><?=$carData['name'], "ga Buyurtma berish"?></h4>
                <h5>Soni: <?=$qty?>, Umumiy narxi: <?=$qty * $carData['new_price']?> $</h5>
                <div class="row mt-3">
                    <div class="col-lg-7">
                        <div class="calculator-form">
                            <form method="post" id="order_form">
                                <input type="hidden" name="car_id" value="<?=$carData['id']?>">
                                <input type="hidden" name="qty" value="<?=$qty?>">
                                <input type="hidden" name="total_sum" value="<?=$qty * $carData['new_price']?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ismi" placeholder="Ismingiz">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefon_raqami" placeholder="Telefon raqamingiz">
                                </div>

                                <button type="submit" class="theme-btn order_btn">Buyurtma berish<i class="fas fa-arrow-right-long"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="calculator-img">
                            <img src="<?=$carImage?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php require_once 'sections/footer.php'; ?>
