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
                        <h1 class="m-0">Mashina <?= (!empty($_GET['r']) && $_GET['r'] == 'car-edit') ? 'Tahrirlash' : "Qo`shish" ?>!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item"><a href="/admin?r=car">Mashinalar</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Mashina <?=(!empty($_GET['r']) && $_GET['r'] == 'car-edit') ? 'Tahrirlash' : "Qo`shish"?></li>
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

                    <input type="hidden" name="id" value="<?=(!empty($carData)) ? $carData['id'] : ''?>">

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
                                        <label for="name">Nomi</label>
                                        <input type="text" required id="name" class="form-control" name="name" placeholder="Name" value="<?=(!empty($carData)) ? $carData['name']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="car_add_image">
                                            <h5>Mashina rasmi</h5>
                                            <input type="file"  hidden id="car_add_image" class="form-control preview" name="car_add_image">
                                            <img class="preview" src="<?=(!empty($_GET['r']) && $_GET['r'] == 'car-edit') ? $carImage : "/uploads/no_image.jpg"?>" alt="" style="width: 100%">
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mini_description">Kichik sharh</label>
                                        <input type="text" required id="mini_description" class="form-control" name="mini_description" placeholder="Mini description" rows="3" value="<?=(!empty($carData)) ? $carData['mini_description']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Sharh</label>
                                        <input type="text" required id="description" class="form-control" name="description" placeholder="Description" rows="6xsrtgyu+
-+
" value="<?=(!empty($carData)) ? $carData['description']: ''?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="karobka">Karobka</label>
                                        <input type="text" required id="karobka" class="form-control" name="karobka" placeholder="Karobka" value="<?=(!empty($carData)) ? $carData['karobka']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="benzin">Benzin</label>
                                        <input type="text" required id="benzin" class="form-control" name="benzin" placeholder="Yoqilg`i sarfi" value="<?=(!empty($carData)) ? $carData['benzin']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="year">Ishlab chiqarilgan yili</label>
                                        <input type="text" required id="year" class="form-control" name="year" placeholder="Year" value="<?=(!empty($carData)) ? $carData['year']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="mator">Yoqilg`i turi</label>
                                        <input type="text" required id="mator" class="form-control" name="mator" placeholder="Yoqilg`i turi" value="<?=(!empty($carData)) ? $carData['mator']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="old_price">Eski narxi</label>
                                        <input type="text" required id="old_price" class="form-control" name="old_price" placeholder="Eski narxi" value="<?=(!empty($carData)) ? $carData['old_price']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_price">Yangi narxi</label>
                                        <input type="text" required id="new_price" class="form-control" name="new_price" placeholder="Yangi narxi" value="<?=(!empty($carData)) ? $carData['new_price']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id">Categoriyasi</label>
                                        <input type="text" required id="category_id" class="form-control" name="category_id" placeholder="Category id" value="<?=(!empty($carData)) ? $carData['category_id']: ''?>">
                                    </div>



                                    <div class="mb-3">
                                        <label for="used">Ishlatilganligi</label>
                                        <input type="text" required id="used" class="form-control" name="used" placeholder="Used" value="<?=(!empty($carData)) ? $carData['used']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="new">Yangi mashina</label>
                                        <input type="text" required id="new" class="form-control" name="new" placeholder="New" value="<?=(!empty($carData)) ? $carData['new']: ''?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="text" required id="status" class="form-control" name="status" placeholder="Status" value="<?=(!empty($carData)) ? $carData['status']: ''?>">
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




<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
</script>



<?php require_once "section/footer.php"?>