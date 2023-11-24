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
                        <h1 class="m-0">Mashina <?= (!empty($_GET['r']) && $_GET['r'] == 'slider-edit') ? 'Tahrirlash' : "Qo`shish" ?>!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item"><a href="/admin?r=slider">Mashinalar</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Mashinalar <?=(!empty($_GET['r']) && $_GET['r'] == 'slider-edit') ? 'Tahrirlash' : "Qo`shish"?></li>
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

                    <input type="hidden" name="id" value="<?=(!empty($slideData)) ? $slideData['id'] : ''?>">

                    <div class="row">

                        <?php if(!empty($errorMessage)): ?>

                            <div class="col-md-12 mb-1">
                                <div class="alert alert-danger"><?=$errorMessage?></div>
                            </div>

                        <?php endif; ?>

                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="subtitle">Subtitle</label>
                                        <input type="text" required id="subtitle" class="form-control" name="subtitle" placeholder="Subtitle" value="<?=(!empty($slideData)) ? $slideData['subtitle']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" required id="subtitle" class="form-control" name="title" placeholder="Title" value="<?=(!empty($slideData)) ? $slideData['title']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <input type="text" required id="description" class="form-control" name="description" placeholder="Description" value="<?=(!empty($slideData)) ? $slideData['description']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn_link_1">Btn link 1</label>
                                        <input type="text" required id="btn_link_1" class="form-control" name="btn_link_1" placeholder="btn_link_1" value="<?=(!empty($slideData)) ? $slideData['btn_link_1']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn_link_2">Btn link 2</label>
                                        <input type="text" required id="btn_link_2" class="form-control" name="btn_link_2" placeholder="btn_link_2" value="<?=(!empty($slideData)) ? $slideData['btn_link_2']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn_text_1">Btn text 1</label>
                                        <input type="text" required id="btn_text_1" class="form-control" name="btn_text_1" placeholder="btn_text_1" value="<?=(!empty($slideData)) ? $slideData['btn_text_1']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn_text_2">Btn text 2</label>
                                        <input type="text" required id="btn_text_2" class="form-control" name="btn_text_2" placeholder="btn_text_2" value="<?=(!empty($slideData)) ? $slideData['btn_text_2']: ''?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label for="slider_bg">
                                            <h5>Slider image</h5>
                                            <input type="file" hidden id="slider_bg" class="form-control preview" name="slider_bg">
                                            <img src="<?=(!empty($_GET['r']) && $_GET['r'] == 'slider-edit') ? $backgroundImage : "/uploads/no_image.jpg"?>?>" alt="" style="width: 100%">
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="car_image">
                                            <h5>Car image</h5>
                                            <input type="file" hidden id="car_image" class="form-control preview" name="car_image">
                                            <img src="<?=(!empty($_GET['r']) && $_GET['r'] == 'slider-edit') ? $carSliderImage : "/uploads/no_image.jpg"?>?>" alt="" style="width: 100%">
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="text" required id="status" class="form-control" name="status" placeholder="Status" value="<?=(!empty($slideData)) ? $slideData['status']: ''?>">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-success">Saqlash</button>
                        </div>

                    </div>

                </form>

            </div>
        </section>

    </div>


#38 min





<?php require_once "section/footer.php"?>