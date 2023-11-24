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
                        <h1 class="m-0">Mashinalar jadvallari!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Mashinalar</li>
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

                        <a href="?r=car-add" class="btn btn-success mb-4">Yangi mashina qo`shish</a>

                        <table class="table table-bordered table-striped">

                            <thead class="bg-light">

                            <tr>
                                <th>#</th>
                                <th>Subtitle</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php if(!empty($allBackCar)):?>
                                <?php foreach ($allBackCar as $key => $car): ?>

                                    <?php $image = getImage('car',$car['id'],$car['image']) ?>


                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $car['name'] ?></td>
                                        <td>
                                            <img src="<?=$image?>" style="max-width: 150px" alt="">
                                        </td>

                                        <td>
                                            <a href="?r=car-edit&id=<?=$car['id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="?r=car-delete&id=<?=$car['id']?>" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
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