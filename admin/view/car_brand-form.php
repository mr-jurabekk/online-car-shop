<?php require_once "section/header.php"?>

<?php require_once "section/navbar.php"?>

<?php require_once "section/sidebar.php"?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mashina brendlarini <?= (!empty($_GET['r']) && $_GET['r'] == 'car_brand-edit') ? 'Tahrirlash' : "Qo`shish" ?>!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item"><a href="/admin?r=car_brand">Mashinalar brendlari</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Mashina brend <?=(!empty($_GET['r']) && $_GET['r'] == 'car_brand-edit') ? 'Tahrirlash' : "Qo`shish"?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <form method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?=(!empty($carBrandData)) ? $carBrandData['id'] : ''?>">

                    <div class="row">

                        <?php if(!empty($errorMessage)): ?>

                            <div class="col-md-12 mb-1">
                                <div class="alert alert-danger"><?=$errorMessage?></div>
                            </div>

                        <?php endif; ?>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" required id="title" class="form-control" name="title" placeholder="Title" value="<?=(!empty($carBrandData)) ? $carBrandData['title']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="text" required id="status" class="form-control" name="status" placeholder="Status" value="<?=(!empty($carBrandData)) ? $carBrandData['status']: ''?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3 text-align-center">
                                        <h5>Mashina brend rasmi</h5>
                                        <label for="car_brand_add_image">
                                            <input type="file"  hidden id="car_brand_add_image" class="form-control preview" name="car_brand_add_image">
                                            <img class="preview" src="<?=(!empty($_GET['r']) && $_GET['r'] == 'car_brand-edit') ? $carBrandImage : "/uploads/no_image.jpg"?>" alt="" height="300px" style="width: 100%">
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button class="btn btn-success">Saqlash</button>
                        </div>

                    </div>

                </form>

            </div>
        </section>

    </div>








<?php require_once "section/footer.php"?>