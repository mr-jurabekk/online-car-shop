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
                        <h1 class="m-0">Mashina brendlari!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Mashina brendlari</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">

                        <a href="?r=car_brand-add" class="btn btn-success mb-4">Yangi brend qo`shish</a>

                        <table class="table table-bordered table-striped">

                            <thead class="bg-light">

                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php if(!empty($getAllCarBrands)):?>
                                <?php foreach ($getAllCarBrands as $key => $allCarBrand): ?>

                                    <?php $image = getImage('car_brands',$allCarBrand['id'],$allCarBrand['image']) ?>
<!--                                    --><?//= debug() ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td>
                                        <img src="<?=$image?>" style="max-width: 150px" alt="">
                                        </td>
                                        <td><?= $allCarBrand['title'] ?></td>

                                        <td>
                                            <a href="?r=car_brand-edit&id=<?=$allCarBrand['id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="?r=car_brand-delete&id=<?=$allCarBrand['id']?>" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </section>

    </div>








<?php require_once "section/footer.php"?>