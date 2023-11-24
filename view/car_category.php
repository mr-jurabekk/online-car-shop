
<?php require_once 'sections/header.php';?>



<main class="main">

    <div class="site-breadcrumb" style="background: url()>
        <div class="container">
            <h2 class="breadcrumb-title"><?=$categoryData['title'];?></h2>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="<?=FRONTEND?>">Asosiy</a>
                </li>
                <li class="active"><?=$categoryData['title'];?></li>
            </ul>
        </div>
    </div>

    <div class="car-area <?=!empty($_GET['view']) ? $_GET['view']: 'list'?> bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car-sidebar">
                        <div class="car-widget">
                            <div class="car-search-form">
                                <h4 class="car-widget-title">Search</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="search">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="col-md-12">
                        <div class="car-sort">
                            <h6>Topildi <?=count($categoryCars);?> ta mashina</h6>
                            <div class="car-sort-list-grid">
                                <a class="car-sort-grid" href="?route=car_category&id=<?=$categoryData['id']?>&view=grid">
                                    <i class="far fa-grid-2"></i>
                                </a>
                                <a class="car-sort-list active" href="?route=car_category&id=<?=$categoryData['id']?>&view=list">
                                    <i class="far fa-list-ul"></i>
                                </a>
                            </div>
                            <div class="col-md-3 car-sort-box">
                                <form action="" method="get">
                                    <input type="hidden" name="route" value="car_category">
                                    <input type="hidden" name="id" value="<?=$categoryData['id']?>">
                                    <input type="hidden" name="view" value="<?=(!empty($_GET['view'])) ? $_GET['view'] : 'list';?>">
                                    <select name="sort" class="select sort_select">
                                        <option <?=($_GET['sort'] == 'name-asc') ? 'selected' : ''?> value="name-asc">Nomi bo`yicha - o`sish</option>
                                        <option <?=($_GET['sort'] == 'name-desc') ? 'selected' : ''?> value="name-desc">Nomi bo`yicha - kamayish</option>
                                        <option <?=($_GET['sort'] == 'price-asc') ? 'selected' : ''?> value="price-asc">Narxi bo`yicha - o`sish</option>
                                        <option <?=($_GET['sort'] == 'price-desc') ? 'selected' : ''?> value="price-desc">Narxi bo`yicha - kamayish</option>
                                        <option <?=($_GET['sort'] == 'year-asc') ? 'selected' : ''?> value="year-asc">Yili bo`yicha - o`sish</option>
                                        <option <?=($_GET['sort'] == 'year-desc') ? 'selected' : ''?> value="year-desc">Yili bo`yicha - kamayish</option>
                                    </select>

                                </form>
                            </div>
                        </div>
                    </div>

                    <?php if(!empty($categoryCars)): ?>
                        <?php foreach ($categoryCars as $car): ?>
                            <div class="row">
                                <?php

                                    $colNumber = 12;
                                    if(!empty($_GET['view'])){
                                        if($_GET['view'] == 'list'){
                                            $colNumber = 12;
                                        }
                                    }else{
                                        $colNumber = 12;
                                    }
                                ?>

                                <div class="col-md-6 col-lg-<?=$colNumber?>">
                                    <div class="car-item">
                                        <div class="car-img">
                                            <span class="car-status status-<?= $car['used'] == 1 ? 1 : 2 ?>"><?= $car['used'] == 1 ? 'Ishlatilgan' : 'Yangi'; ?></span>
                                            <img src= <?="../uploads/car/1/",$car['image'] ?> alt="">

                                        </div>
                                        <div class="car-content">
                                            <div class="car-top">
                                                <h4>
                                                    <a href="#"><?= $car['name']; ?></a>
                                                </h4>
                                            </div>
                                            <ul class="car-list">
                                                <li>
                                                    <i class="far fa-steering-wheel"></i><?= $car['karobka'] ?>
                                                </li>
                                                <li>
                                                    <i class="far fa-road"></i><?= $car['benzin'] ?>>
                                                </li>
                                                <li>
                                                    <i class="far fa-car"></i><?= $car['year'] ?>
                                                </li>
                                                <li>
                                                    <i class="far fa-gas-pump"></i><?= $car['mator'] ?>
                                                </li>
                                            </ul>
                                            <p> <?= $car['description'] ?> </p>
                                            <div class="car-footer">
                                                <span class="car-price"><?= $car['new_price'] ?></span>
                                                <a href="?route=car-view&id=<?= $car['id']?>" class="theme-btn">
                                                    <span class="far fa-eye"></span>Batafsil </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>


                    <?php else: ?>

                        <div class="alert alert-danger">
                            Ushbu sahifada mashina topilmadi
                        </div>

                    <?php endif;?>



                </div>
            </div>
        </div>
    </div>

</main>


<?php require_once 'sections/footer.php'; ?>